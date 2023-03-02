<?php

namespace App\Http\Controllers;

use App\Models\MyProgram;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() {
        $myprograms = MyProgram::where('user_id', auth()->user()->id)->get();
        return view('user.profil', [
            'title' => "Profile",
            'myprograms' => $myprograms,
        ]);
    }

    public function update(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => '',
            'no_hp' => '',
        ]);

        User::where('id', auth()->user()->id)
        ->update($validated);


        return back()->with('success', 'Berhasil mengubah profile!');
    }
}
