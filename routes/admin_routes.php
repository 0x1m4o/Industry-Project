<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;



Route::get('/', function () {
    return redirect('/admin/program');
});

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