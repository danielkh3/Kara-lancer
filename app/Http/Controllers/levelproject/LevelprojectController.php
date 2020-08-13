<?php

namespace App\Http\Controllers\levelproject;

use App\Http\Controllers\Controller;
use App\Levelprojectl;
use Illuminate\Http\Request;
use App\Http\Requests\LevelprojectRequest;

class LevelprojectController extends Controller
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
        return view('levelproject.levelproject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LevelprojectRequest $request)
    {
        $validate_data = $request->validated();

        $project = Levelproject::create([
            'day' => $validate_data['day'],
            'price' => $validate_data['price'],
            'detail' => $validate_data['detail'],
            'detail_employer' => $validate_data['detail_employer'],
            'detail_lancer' => $validate_data['detail_lancer'],
        ]);
        return redirect('/levelproject/levelproject/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function show(Level $level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(LevelprojectRequest $request, Level $level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $level)
    {
        //
    }
}
