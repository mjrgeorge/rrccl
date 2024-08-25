<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::latest()->get();
        return view('admin.slider.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $slider = Slider::latest()->get();
        return view('admin.slider.create',compact('slider'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'slider_text_one'=>$request->slider_text_one,
            'slider_text_two'=>$request->slider_text_two,
            'status'=>$request->status,
        ];
        if($request->file('image')){
            $image = $request->file('image');
            $path = public_path('image/slider/');
        
            $name = 'slider'.time() . '.' . $image->extension();
           Image::make($image)->resize(1920, 800)->save($path . $name);
           $data['image'] = $name;
        }
        $result = Slider::create($data);

        if($result){

            return back()->with('success','Slider Inserted Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        $slider = $slider;
        return view('admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $slider = Slider::find($slider->id);
        $data = [
            'slider_text_one'=>$request->slider_text_one,
            'slider_text_two'=>$request->slider_text_two,
            'status'=>$request->status,
        ];
        if($request->file('image')){
            $image = $request->file('image');
            $path = public_path('image/slider/');
        
            $name = 'slider'.time() . '.' . $image->extension();
           Image::make($image)->resize(1920, 800)->save($path . $name);
           $data['image'] = $name;
        }
        $result = $slider->update($data);

        if($result){

            return redirect()->route('slider.index')->with('success','Slider Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider = Slider::find($slider->id);
        $result = $slider->delete();

        if($result){

            return back()->with('success','Slider Deleted Successfully');
        }
    }
}
