<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;
use App\Models\AuditLog; // Import the AuditLog model

class SigninController extends Controller
{
    protected int $maxAttempts = 5;
    protected int $decayMinutes = 1;

    /**
     * Get the redirect path based on user role
     */
    private function getRedirectPath(string $role): string
    {
        return match ($role) {
            'business_analyst' => '/dataanalyst',
            'it_support' => '/systemconfig',
            'compliance_officer' => '/audittrail',
            default => '/dashboard',
        };
    }

    public function login(Request $request)
    {
        // Validate the incoming request data
        $credentials = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        // Check if the email exists in the database
        $user = User::select('user_id', 'email', 'password', 'first_name', 'last_name', 'role_id', 'phone_number', 'status')
            ->where('email', $credentials['email'])
            ->first();

        if (!$user) {
            Log::info("Failed login attempt", [
                'email' => $credentials['email'],
                'ip' => $request->ip(),
                'timestamp' => now(),
            ]);
            return back()->withErrors([
                'email' => 'This email does not exist in our records.',
            ]);
        }

        $key = 'login.' . $request->ip();

        if (RateLimiter::tooManyAttempts($key, $this->maxAttempts)) {
            $seconds = RateLimiter::availableIn($key);
            Log::warning("Too many login attempts from IP: {$request->ip()}", [
                'ip' => $request->ip(),
                'attempts' => RateLimiter::attempts($key),
                'timestamp' => now(),
            ]);

            return back()->withErrors([
                'email' => __('auth.throttle', [
                    'seconds' => $seconds,
                    'minutes' => ceil($seconds / 60),
                ]),
            ]);
        }

        // Check password and handle login
        if (Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            RateLimiter::clear($key);
            $request->session()->regenerate();
            
            // Log the successful login to the AuditLog
            $auditLog = AuditLog::create([
                'name' => "{$user->first_name} {$user->last_name}",
                'email' => $request->email, 
                'action' => 'Active',
                'timestamp' => now(),
                'details' => "Successful login: {$request->email}",
            ]);

            $redirectTo = $this->getRedirectPath($user->role);
            return redirect()->intended($redirectTo);
        } else {
            Log::info("Password mismatch for user", [
                'email' => $user->email,
                'ip' => $request->ip(),
                'timestamp' => now(),
            ]);
            RateLimiter::hit($key, $this->decayMinutes * 60);

            // // Log the failed login attempt to the AuditLog
            // AuditLog::create([
            //     'name' => 'Failed Login Attempt',
            //     'email' => $credentials['email'],
            //     'action' => 'Failed Login',
            //     'timestamp' => now(),
            //     'details' => 'Failed login attempt for email: ' . $credentials['email'],
            // ]);

            return back()->withErrors([
                'email' => __('auth.failed'),
            ]);
        }
    }

    public function logout(Request $request)
    {
        $email = Auth::user()->email;
        $user = User::where('email', $email)->first();
        
        // Log the logout event to the AuditLog
        $auditLog = AuditLog::create([
            'name' => "{$user->first_name} {$user->last_name}",
            'email' => $user->email, 
            'action' => 'Inactive',
            'timestamp' => now(),
            'details' => "Successful logout: {$user->email}",
        ]);
        
        // Clear authentication
        Auth::logout();

        // Clear all session data
        Session::flush();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the session token
        $request->session()->regenerateToken();

        return redirect('/sign-in')->with('message', 'You have been logged out successfully.');
    }

    public function showLoginForm()
    {
        return view('sign-in'); // Assuming 'sign-in' is the name of your login Blade view
    }

}
