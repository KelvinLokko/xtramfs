<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use App\Services\PasswordService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\UserCreatedEmail;

class UsersController extends Controller
{
    // Show the form to add a new user
    public function create()
    {
        return view('/users/add-users'); // This view contains your user creation form
    }

    // Store the new user
    public function store(Request $request)
    {
        // Validate the incoming request
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'mobno' => 'required|string|regex:/^\+?\d{10,15}$/', // Mobile number validation
            'email' => 'required|email|unique:users,email', // Ensure the email is unique in users table
            // 'password' => 'required|string|min:8|confirmed', // Ensure password is confirmed (requires a field named password_confirmation in the form)
        ]);

        // If validation fails, return validation errors
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(), // Return validation errors
            ]);
        }

        // Generate a random password if the password is not provided
        $password = $request->password ?? PasswordService::generateRandomPassword();

        $user_role = 0; // Default value (e.g., 0 for a regular user)

        if ($request->role == 'admin') {
            $user_role = 1;
        }elseif ($request->role == 'analyst'){
            $user_role = 2; 
        }elseif ($request->role == 'com_officer'){
            $user_role = 3;
        }

        // Create the new user
        $user = User::create([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'role_id' => $user_role,
            //'mobno' => $request->mobno,
            'email' => $request->email,
            'password' => Hash::make($password), // Hash the password
        ]);

        // Return success response
        $response  = response()->json([
            'status' => 'success',
            'message' => 'User added successfully!',
        ]);
        session()->flash('success', 'User created successfully!');
        


        $password = Str::random(10); // Generate a random password
        $token = Str::random(60); // Generate a token for password reset

        // Store the token in the database (e.g., in the user model)
        $user->token = $token;
        $user->save();
        
        // // Store the token in the database
        // Mail::to($user->email)->send(new UserCreatedEmail($user, $password, $token));



        return redirect()->route('users.usermgt');





    }

    public function getAllUsers(Request $request)
    {
        // Fetch users with pagination (10 users per page)
        $users = User::select('id', 'first_name', 'last_name', 'email', 'role_id', 'created_at')
                     ->paginate(10); // Adjust '10' for the number of rows per page

        
        // dd($users);
        // Check if the request is an AJAX call
        if ($request->ajax()) {
            return response()->json([
                'users' => $users, 
                'pagination' => (string) $users->links()
            ]); // Return both users and pagination links in the response
        }
    
        // For non-AJAX requests, return the view
        return view('/users/user-management', compact('users'));
    }
}
