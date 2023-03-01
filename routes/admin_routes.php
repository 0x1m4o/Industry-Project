<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return redirect('/admin/login');
});

Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// Guest
Route::middleware(['guest:admin'])->group(function () {
    // Login
    Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login']);
});

// Login Admin Required
Route::middleware(['auth:admin'])->group(function () {
    // Program
    Route::resource('/program', AdminController::class);
});