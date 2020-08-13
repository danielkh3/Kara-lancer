<?php

namespace App\Http\Controllers\lancer;

use App\Http\Controllers\Controller;
use App\Lancer;
use Illuminate\Http\Request;
use App\Http\Requests\LancerRequest;

class lancerController extends Controller
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
        return view('lancer.lancer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LancerRequest $request)
    {
        $validate_data = $request->validated();

        $project = Lancer::create([
            'fname' => $validate_data['fname'],
            'lname' => $validate_data['lname'],
            'phone' => $validate_data['phone'],
            'bio' => $validate_data['bio'],
        ]);
        return redirect('/lancer/lancer/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lancer  $lancer
     * @return \Illuminate\Http\Response
     */
    public function show(Lancer $lancer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lancer  $lancer
     * @return \Illuminate\Http\Response
     */
    public function edit(Lancer $lancer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lancer  $lancer
     * @return \Illuminate\Http\Response
     */
    public function update(LancerRequest $request, Lancer $lancer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lancer  $lancer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lancer $lancer)
    {
        //
    }
}
