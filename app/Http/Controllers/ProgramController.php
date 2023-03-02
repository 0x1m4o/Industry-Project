<?php

namespace App\Http\Controllers;

use App\Models\MyProgram;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
    public function index(Request $request) {
        // return view('user.program', [
        //     'title' => 'Program',
        //     'program' => Program::all()
        // ]); 
        
        if($request) {
            $programs = Program::where('nama', 'like', '%'.$request->cari.'%')->get();
        } else {
            $programs = Program::all();
        }

        return view('user.program', [
            'title' => "Program",
            'programs' => $programs,
            // 'request' => $request->cari
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
        return back()->with('success', 'Berhasil mendaftar program. Selamat Belajar!');
    }
}
