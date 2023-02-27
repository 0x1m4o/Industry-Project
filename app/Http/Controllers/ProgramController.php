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

    public function show(Program $programs) {
        return view('program.show', [
            'title' => 'Program',
            'programs' => $programs
        ]); 
    }
}
