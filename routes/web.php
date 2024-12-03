<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\SigninController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UsersController; // Make sure the controller name matches
use App\Http\Controllers\ReportController;

Route::get('/', function () {
     return redirect()->route("dashboard.admin");
 });

 Route::get('/dashboard', function () {
    return view('dashboard.admin');
})->name("dashboard.admin");


Route::view('/sign-in', 'sign-in')->name('sign-in');
Route::post('/sign-in', [SigninController::class, 'login'])->name('login.submit');
Route::get('/login', [SigninController::class, 'showLoginForm'])->name('login');
Route::post('/login', [SigninController::class, 'login'])->name('login.post');

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.submit');
});

// Route::middleware('auth')->group(function () {
//     Route::post('logout', [AuthController::class, 'logout'])->name('logout');
//     // Other authenticated routes will go here
//     Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
// });

// Route for displaying the Add User form
Route::get('/add-user', [UsersController::class, 'create'])->name('users.create');

// Route for handling the Add User form submission
Route::post('/add-user', [UsersController::class, 'store'])->name('users.store');


// Route for handling the Add User form submission
Route::get('/user-management', [UsersController::class, 'getAllUsers'])->name('users.usermgt');

// Route for Report generation 
Route::get('/reportview', [ReportController::class, 'report'])->name('report.view');
Route::post('/reportview/query', [ReportController::class, 'index'])->name('query.view');

// Route::match(['get', 'post'], '/reportview', [ReportController::class, 'reportView']);