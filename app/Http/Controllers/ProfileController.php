<?php

namespace App\Http\Controllers;

use App\Models\MyProgram;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Request;

class ProfileController extends Controller
{
    public function profile() {
        $myprograms = MyProgram::where('user_id', auth()->user()->id)->get();
        return view('user.profil', [
            'title' => "Profile",
            'myprograms' => $myprograms,
        ]);
    }

    public function update(Request $request, User $user){
        $validated = $request->validate([
            'name' => 'required|min:3',
            'date_of_birth' => '',
            'gender' => '',
        ]);
        $user = User::findOrFail($user->id);
        $user->update([
            'name'     => $request->name,
            'email'   => $request->email,
            'no_hp'   => $request->no_hp,
        ]);


        return back()->with('success', 'Berhasil mengubah profile!');
    }
}
