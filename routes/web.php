<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::middleware(['guest:web'])->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    
    // Logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware(['auth:web'])->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'profile']);
    Route::post('/profile', [ProfileController::class, 'update']);
});

// Reset Password
Route::get('/reset-password', [ForgotController::class, 'index']);
Route::post('/reset-password', [ForgotController::class, 'reset'])->name('password.reset');

// Program
Route::get('/program', [ProgramController::class, 'index']);
Route::get('/program/{id}', [ProgramController::class, 'show'])->name('user.show');

Route::get('/myprogram/{id}', [ProgramController::class, 'showmyprogram'])->name('show.myprogram');
Route::post('/myprogram/{id}', [ProgramController::class, 'myprogram'])->name('add.myprogram');


// Admin
Route::prefix('/admin')->group(__DIR__.'/admin_routes.php');
