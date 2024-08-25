<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class AboutModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = AboutModel::latest()->get();
        return view('admin.about.index',compact('about'));
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
            'icon'=>$request->icon,
            'number'=>$request->number,
            'details'=>$request->details,
        ];
        $result = AboutModel::create($data);
        if($result){
            return back()->with('success','added succesfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutModel $aboutModel)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutModel $aboutModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutModel $aboutModel)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutModel $aboutModel)
    {
       //
    }
    public function editAbout($id)
    {
        $about = AboutModel::latest()->get();
        $aboutModel = AboutModel::find($id);
        return view('admin.about.edit',compact('aboutModel','about'));
    }
    public function deleteAbout($id)
    {
        $r = AboutModel::find($id);
        $result =  $r->delete();
        if($result){
            return redirect()->route('aboutComs.index')->with('success','deleted succesfully');
        }
    }
    public function updateEdit(Request $request ,$id)
    {
        $data = [
            'title'=>$request->title,
            'icon'=>$request->icon,
            'number'=>$request->number,
            'details'=>$request->details,
        ];
        $r = AboutModel::find($id);
        $result = $r->update($data);
        if($result){
            return redirect()->route('aboutComs.index')->with('success','updated succesfully');
        }
    }
    public function whyChooseUs()
    {
       $choose = WhyChooseUs::first();
       return view('admin.about.choose',compact('choose'));
    }
    public function updateChoose(Request $request)
    {
       $data = [
        'title'=>$request->title,
        'details'=>$request->details,
        'safe_trust'=>$request->safe_trust,
        'specialist'=>$request->specialist,
        'medicine'=>$request->medicine,
        'take_care'=>$request->take_care,
       ];
       $id = $request->id;
       $a =  WhyChooseUs::find($id);
       $result = $a->update($data);
       if($result){
        return back()->with('success','updated succesfully');
    }
    }
}
