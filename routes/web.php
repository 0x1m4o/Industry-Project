<?php

use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('user.landing', [
        'title' => "Landing",
    ]);
});


Route::get('/login', function () {
    return view('auth.login', [
        'title' => "Masuk",
    ]);
});

Route::get('/register', function () {
    return view('auth.register', [
        'title' => "Daftar",
    ]);
});

Route::get('/program', [ProgramController::class, 'index']);
