<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('user.program', [
        //     'title' => 'Program',
        //     'program' => Program::all()
        // ]); 
        $programs = Program::all();
        return view('admin.programs.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.programs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $this->validate($request, [
        'gambar'     => 'required|image|mimes:png,jpg,jpeg',
        'nama'     => 'required',
        'category'   => 'required',
        'deskripsi'   => 'required'
    ]);

    //upload image
    $gambar = $request->file('gambar');
    $gambar->storeAs('public/programs', $gambar->hashName());
    
    $blog = Program::create([
        'gambar'     => $gambar->hashName(),
        'nama'     => $request->nama,
        'category'   => $request->category,
        'deskripsi'   => $request->deskripsi
    ]);

    if($blog){
        //redirect dengan pesan sukses
        return redirect()->route('program.index')->with(['success' => 'Data Program Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('program.index')->with(['error' => 'Data Program Gagal Disimpan!']);
    }
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        return view('admin.programs.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'category'   => 'required',
            'deskripsi'   => 'required'
        ]);

        //get data Blog by ID
        $program = Program::findOrFail($program->id);

        if($request->file('gambar') == "") {

            $program->update([
                'nama'     => $request->nama,
                'category'   => $request->category,
                'deskripsi'   => $request->deskripsi,
            ]);

        } else {

            //hapus old image
            Storage::disk('local')->delete('public/programs/'.$program->gambar);

            //upload new image
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/programs', $gambar->hashName());

            $program->update([
                'gambar'     => $gambar->hashName(),
                'nama'     => $request->nama,
                'category'   => $request->category,
                'deskriosi'   => $request->deskripsi,
            ]);

        }

        if($program){
            //redirect dengan pesan sukses
            return redirect()->route('program.index')->with(['success' => 'Data Program Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('program.index')->with(['error' => 'Data Program Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $program = Program::findOrFail($id);
    Storage::disk('local')->delete('public/programs/'.$program->gambar);
    $program->delete();

    if($program){
        //redirect dengan pesan sukses
        return redirect()->route('program.index')->with(['success' => 'Data Program Berhasil Dihapus!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('program.index')->with(['error' => 'Data Program Gagal Dihapus!']);
    }
    }
}
