<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.programs.index', [
            'title' => 'Program',
            'program' => Program::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Program $programs)
    {
        return view('program.show', [
            'title' => 'Program',
            'programs' => $programs
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('program.edit', compact('programs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $programs)
    {
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $programs)
    {
        $programs->delete();

        return redirect()->back()->with('success', 'Berhasil Hapus Program');
    }
}
