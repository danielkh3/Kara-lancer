<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Price_project;
use Illuminate\Http\Request;
use App\Http\Requests\Price_projectRequest;

class Price_projectController extends Controller
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
        return view('project.price_project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Price_projectRequest $request)
    {
        $validate_data = $request->validated();

        $project = Price_project::create([
            'price' => $validate_data['price'],
        ]);
        return redirect('/project/price_project/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Price_project  $price_project
     * @return \Illuminate\Http\Response
     */
    public function show(Price_project $price_project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Price_project  $price_project
     * @return \Illuminate\Http\Response
     */
    public function edit(Price_project $price_project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Price_project  $price_project
     * @return \Illuminate\Http\Response
     */
    public function update(Price_projectRequest $request, Price_project $price_project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Price_project  $price_project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price_project $price_project)
    {
        //
    }
}
