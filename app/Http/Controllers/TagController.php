<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tag = Tag::latest()->get();
        return view('admin.tag.index',compact('tag'));
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
        $data = ['title'=>$request->title];
        $result = Tag::create($data);
        if($result){
            return back()->with('success','tag added successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        $t = Tag::latest()->get();
        return view('admin.tag.edit',compact('tag','t'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $data = ['title'=>$request->title];
        $r = Tag::find($tag->id);
        $result = $r->update($data);
        if($result){
            return redirect()->route('tags.index')->with('success','tag updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $r = Tag::find($tag->id);
        $result = $r->delete();
        if($result){
            return redirect()->route('tags.index')->with('success','tag deleted successfully');
        }
    }
}
