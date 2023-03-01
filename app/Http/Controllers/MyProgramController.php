<?php

namespace App\Http\Controllers;

use App\Models\MyProgram;
use App\Http\Requests\StoreMyProgramRequest;
use App\Http\Requests\UpdateMyProgramRequest;

class MyProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMyProgramRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMyProgramRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyProgram  $myProgram
     * @return \Illuminate\Http\Response
     */
    public function show(MyProgram $myProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyProgram  $myProgram
     * @return \Illuminate\Http\Response
     */
    public function edit(MyProgram $myProgram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMyProgramRequest  $request
     * @param  \App\Models\MyProgram  $myProgram
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMyProgramRequest $request, MyProgram $myProgram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyProgram  $myProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyProgram $myProgram)
    {
        //
    }
}
