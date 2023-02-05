<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
    public function index() {
        return view('program.index', [
            'title' => 'Program',
            'program' => Program::all()
        ]); 
    }

    public function create() {
        return view('program.create');
    }

    public function store(Request $request) {
        $request->validate([
            'gambar' => 'required',
            'nama' => 'required',
            'slug' => 'required',
            'category' => 'required',
            'deskripsi' => 'required'
        ]);

        Program::create($request->all());

        return redirect()->back()->with('success', 'Berhasil Membuat Program');
    }

    public function show(Program $programs) {
        return view('program.show', [
            'title' => 'Program',
            'programs' => $programs
        ]); 
    }

    public function edit(Program $programs) {
        return view('program.edit', compact('programs'));
    }

    public function update(Request $request, Program $programs) {
        $request->validate([
            'gambar' => 'required',
            'nama' => 'required',
            'slug' => 'required',
            'category' => 'required',
            'deskripsi' => 'required'
        ]);

        $programs->update($request->all());

        return redirect()->back()->with('success', 'Berhasil Update Program');
    }

    public function destroy(Program $programs) {
        $programs->delete();

        return redirect()->back()->with('success', 'Berhasil Hapus Program');
    }
}
