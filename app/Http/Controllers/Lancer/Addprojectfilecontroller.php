<?php

namespace App\Http\Controllers\lancer;

use App\Addprojectfile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddprojectfileRequest;

class Addprojectfilecontroller extends Controller
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
        return view('lancer.add_project_file');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AddprojectfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddprojectfileRequest $request)
    {
        $validate_data = $request->validated();

        $project = Addprojectfile::create([
            'dir_file' => $validate_data['dire_file'],
            'name_file' => $validate_data['name_file'],
        ]);
        return redirect('/lancer/add_project_file/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Addprojectfile  $addprojectfile
     * @return \Illuminate\Http\Response
     */
    public function show(Addprojectfile $addprojectfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Addprojectfile  $addprojectfile
     * @return \Illuminate\Http\Response
     */
    public function edit(Addprojectfile $addprojectfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Addprojectfile  $addprojectfile
     * @return \Illuminate\Http\Response
     */
    public function update(AddprojectfileRequest $request, Addprojectfile $addprojectfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Addprojectfile  $addprojectfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addprojectfile $addprojectfile)
    {
        //
    }
}
