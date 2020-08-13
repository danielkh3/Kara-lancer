<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use App\Title;
use App\Project;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
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
        // $s = Project::whereTitle_id(4)->first();
        // return dd(Title::whereId($s->id)->get());
        // return Role::whereName('employer')->first()->permissions()->sync([1,2]);
        // dd(auth()->user()->hasRole(Permission::whereName('add_project')->first()->roles));
        return view('project.addproject', [
            'titles' => Title::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        $validate_data = $request->validated();
        $title_id = intval($validate_data['title_id']);
// return dd($title_id);
        $project = auth()->user()->projects()->create([
            'title_id' => $title_id,
            'subject' => $validate_data['subject'],
            'suggested_days' => $validate_data['suggested_days'],
            'detail' => $validate_data['detail'],
            'price' => $validate_data['price'],
        ]);
        return redirect('/admin/project/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
