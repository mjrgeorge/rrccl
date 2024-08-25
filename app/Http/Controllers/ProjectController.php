<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::latest()->get();
        return view('admin.project.index',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'title'=>$request->title,
            'category'=>$request->category,
            'section'=>$request->section,
            'details'=>$request->details,
        ];
        if($request->file('image')){
            $image = $request->file('image');
            $path = public_path('image/project/');
        
            $name = 'project'.time() . '.' . $image->extension();
           Image::make($image)->resize(391, 404)->save($path . $name);
           $data['image'] = $name;
        }
        $result = Project::create($data);

        if($result){

            return back()->with('success','Project Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = [
            'title'=>$request->title,
            'category'=>$request->category,
            'section'=>$request->section,
             'details'=>$request->details,
        ];
        if($request->file('image')){
            $image = $request->file('image');
            $path = public_path('image/project/');
        
            $name = 'project'.time() . '.' . $image->extension();
           Image::make($image)->resize(391, 404)->save($path . $name);
           $data['image'] = $name;
        }
        $r = Project::find($project->id);
        $result = $r->update($data);

        if($result){

            return redirect()->route('projects.index')->with('success','Project Added Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $r = Project::find($project->id);
        $result = $r->delete();

        if($result){

            return redirect()->route('projects.index')->with('success','Project Added Successfully');
        }
    }
}
