<?php

namespace App\Http\Controllers\lancer;

use App\Worksample;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorksampleRequest;

class Work_samplecontroller extends Controller
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
        return view('lancer.work_sample');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorksampleRequest $request)
    {
        $validate_data = $request->validated();

        $project = Work_sample::create([
            'subject' => $validate_data['subject'],
            'detail' => $validate_data['detail'],
            'file_name' => $validate_data['file_name'],
        ]);
        return redirect('/lancer/work_sample/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Work_sample  $work_sample
     * @return \Illuminate\Http\Response
     */
    public function show(Worksample $work_sample)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Work_sample  $work_sample
     * @return \Illuminate\Http\Response
     */
    public function edit(Worksample $work_sample)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Work_sample  $work_sample
     * @return \Illuminate\Http\Response
     */
    public function update(WorksampleRequest $request, Work_sample $work_sample)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Work_sample  $work_sample
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work_sample $work_sample)
    {
        //
    }
}
