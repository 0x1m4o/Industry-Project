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
        $request->validate([
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg,jfif',
            'name' => 'required|min:3',
            'email' => 'required',
            'no_hp' => 'required',
        ]);

        
        if($request->hasFile('avatar')) {
            $filename = time() . '-' . auth()->user()->id . '.' . $request->avatar->getClientOriginalExtension();
            $request->avatar->storeAs('public/avatar', $filename);
            User::where('id', auth()->user()->id)
            ->update([
                'avatar' => "/storage/avatar/" . $filename,
                'name' => $request->name,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
            ]);     
        }else{
            User::where('id', auth()->user()->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
            ]);
        }

        return back()->with('success', 'Berhasil mengubah profile!');
    }
}
