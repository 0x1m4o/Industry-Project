<?php

namespace App\Http\Controllers;

use App\Models\MyProgram;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
    public function index() {
        // return view('user.program', [
        //     'title' => 'Program',
        //     'program' => Program::all()
        // ]); 
        $programs = Program::all();
        return view('user.program', [
            'title' => "Program",
            'programs' => $programs
        ]);
    }

    public function show($id, Program $programs) {
        $programs = Program::where('id', $id)->first();
        return view('user.show_program', [
            'title' => $programs->nama,
            'programs' => $programs
        ]); 
    }

    public function myprogram(Request $request, $id){
        $myprogram = new MyProgram;
        $program = Program::find($id);
        
        $myprogram->user_id = auth()->user()->id;
        $myprogram->name = $request->name;
        $myprogram->email = $request->email;
        $myprogram->no_hp = $request->no_hp;
        $myprogram->program_id = $program->id;
        $myprogram->image = $program->gambar;
        $myprogram->title = $program->nama;
        $myprogram->category = $program->category;
        $myprogram->description = $program->deskripsi;

        $myprogram->save();

        return redirect()->back();
    }

    public function profile() {
        $myprograms = MyProgram::where('user_id', auth()->user()->id)->get();
        return view('user.profil', [
            'title' => "Profile",
            'myprograms' => $myprograms,
        ]);
    }
}
