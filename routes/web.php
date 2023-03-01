<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// User
Route::get('/', function () {
    return view('user.home', [
        'title' => "Homepage",
    ]);
});

Route::get('/profile', function () {
    return view('user.profil', [
        'title' => "Profile",
    ]);
});

Route::middleware(['guest:web'])->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Forgot Password
Route::get('/forgot-password', [ForgotController::class, 'index'])->name('password.request');

// Reset Password
Route::get('/reset-password', [ForgotController::class, 'reset'])->name('password.reset');


// Program
Route::get('/program', [ProgramController::class, 'index']);
Route::get('/program/{id}', [ProgramController::class, 'show'])->name('user.show');

// My Program
Route::post('/my-program/{id}', [ProgramController::class, 'addmyprogram'])->name('add.myprogram');

// Admin
Route::prefix('/admin')->group(__DIR__.'/admin_routes.php');
