<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => "Daftar",
        ]);
    }

    public function register(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email:dns|unique:users',
            'no_hp' => 'required|numeric|unique:users|min_digits:10|max_digits:13',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        $validation['password'] = bcrypt($validation['password']);
 
        User::create($validation);

        return redirect('/login')->with('success', 'Berhasil Register! Silahkan Login');;
    }
}
