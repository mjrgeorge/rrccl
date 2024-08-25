<?php

namespace App\Http\Controllers;

use App\Models\DropdownText;
use Illuminate\Http\Request;

class DropdownTextController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $text = DropdownText::latest()->get();
        return view('admin.dropdown.index',compact('text'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dropdown.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $r = DropdownText::create($request->all());
       if($r){
            return back()->with('success','added successfully');
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(DropdownText $dropdownText)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DropdownText $dropdownText)
    {
        // dd($dropdownText);
        // return view('admin.dropdown.edit',compact('dropdownText'));
    }
    public function editDropdown($dropdownText)
    {
        $text = DropdownText::find($dropdownText);
        return view('admin.dropdown.edit',compact('text'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $text = DropdownText::find($id);
       $data = [
        'title' => $request->title,
        'details' => $request->details,
       ];
       $r = $text->update($data);
       if($r){
        return redirect()->route('dropDown.index')->with('success','updated successfully');
   }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DropdownText $dropdownText)
    {
       //
    }
    public function deleteDrop(Request $request,$id)
    {
        $text = DropdownText::find($id);
        $r = $text->delete();
        if($r){
         return redirect()->route('dropDown.index')->with('success','deleted successfully');
        }
    }
}
