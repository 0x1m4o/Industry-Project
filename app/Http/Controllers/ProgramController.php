<?php

namespace App\Http\Controllers;

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

    public function show($id, Program $program) {
        $programs = Program::where('id', $id)->first();
        return view('user.show_program', [
            'title' => $programs->nama,
            'programs' => $program
        ]); 
    }

}
