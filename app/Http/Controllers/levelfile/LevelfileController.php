<?php

namespace App\Http\Controllers\levelfile;

use App\Http\Controllers\Controller;
use App\Levelsfile;
use Illuminate\Http\Request;
use App\Http\Requests\LevelfileRequest;

class LevelfileController extends Controller
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
        return view('levelfile.levelfile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LevelfileRequest $request)
    {
        $validate_data = $request->validated();

        $project = Levelsfile::create([
            'directory_name' => $validate_data['directory_name'],
            'name' => $validate_data['name'],
            'subject' => $validate_data['subject'],
            'detail' => $validate_data['detail'],
        ]);
        return redirect('/levelfile/levelfile/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Levelsfile  $levelsfile
     * @return \Illuminate\Http\Response
     */
    public function show(Levelsfile $levelsfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Levelsfile  $levelsfile
     * @return \Illuminate\Http\Response
     */
    public function edit(Levelsfile $levelsfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Levelsfile  $levelsfile
     * @return \Illuminate\Http\Response
     */
    public function update(LevelfileRequest $request, Levelsfile $levelsfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Levelsfile  $levelsfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Levelsfile $levelsfile)
    {
        //
    }
}
