<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceDetails;
use Illuminate\Http\Request;
use Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::latest()->get();
        return view('admin.service.index',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'title'=>$request->title,
            'details'=>$request->details,
            'status'=>$request->status,
            'icon'=>$request->icon,
        ];
        if($request->file('image')){
            $image = $request->file('image');
            $path = public_path('image/service/');
        
            $name = 'service'.time() . '.' . $image->extension();
           Image::make($image)->resize(307, 190)->save($path . $name);
           $data['image'] = $name;
        }
        $result = Service::create($data);

        if($result){

            return back()->with('success','Service Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        $details = ServiceDetails::where('service_id',$service->id)->first();

        return view('admin.service.addDetails',compact('service','details'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit',compact('service'));
  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $data = [
            'title'=>$request->title,
            'details'=>$request->details,
            'status'=>$request->status,
            'icon'=>$request->icon,
        ];
        if($request->file('image')){
            $image = $request->file('image');
            $path = public_path('image/service/');
        
            $name = 'service'.time() . '.' . $image->extension();
           Image::make($image)->resize(307, 190)->save($path . $name);
           $data['image'] = $name;
        }
        $result = Service::find($service->id);
        $g = $result->update($data);

        if($g){

            return redirect()->route('services.index')->with('success','Service Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $result = Service::find($service->id);
        $g = $result->delete();

        if($g){

            return redirect()->route('services.index')->with('success','Service Deleted Successfully');
        }
    }
    /**
     * add service details for service
     */
    public function serviceDetailsAdd(Request $request)
    {
      $data = [
        'treatment_name'=>$request->treatment_name,
        'time_duration'=>$request->time_duration,
        'doctor_name'=>$request->doctor_name,
        'quotation'=>$request->quotation,
        'details'=>$request->details,
        'second_title'=>$request->second_title,
        'second_details'=>$request->second_details,
        'service_id'=>$request->service_id,
        'fst_image_nm'=>$request->fst_image_nm,
        'fst_image_dgn'=>$request->fst_image_dgn,
        'snd_image_nm'=>$request->snd_image_nm,
        'snd_image_dgn'=>$request->snd_image_dgn,
        'trd_image_nm'=>$request->trd_image_nm,
        'trd_image_dgn'=>$request->trd_image_dgn,
      ];
      if($request->file('big_image')){
            $image = $request->file('big_image');
            $path = public_path('image/service/details/');
        
            $name = 'service-details-big'.time() . '.' . $image->extension();
           Image::make($image)->resize(1220, 600)->save($path . $name);
          $data['big_image'] = $name;
        }
      if($request->file('short_image_one')){
            $image = $request->file('short_image_one');
            $path = public_path('image/service/details/');
        
            $name = 'service-details-one'.time() . '.' . $image->extension();
           Image::make($image)->resize(391, 400)->save($path . $name);
          $data['short_image_one'] = $name;
        }
      if($request->file('short_image_two')){
            $image = $request->file('short_image_two');
            $path = public_path('image/service/details/');
        
            $name = 'service-details-two'.time() . '.' . $image->extension();
           Image::make($image)->resize(391, 404)->save($path . $name);
          $data['short_image_two'] = $name;
        }
      if($request->file('short_image_three')){
            $image = $request->file('short_image_three');
            $path = public_path('image/service/details/');
        
            $name = 'service-details-two'.time() . '.' . $image->extension();
           Image::make($image)->resize(391, 404)->save($path . $name);
          $data['short_image_three'] = $name;
        }
        $details = ServiceDetails::where('service_id',$request->service_id)->first();
        $flag = false;
        if($details){
            $d = ServiceDetails::find($details->id);
            $result = $d->update($data);
            $flag = true;
        }else{
            $result = ServiceDetails::create($data);
            $flag = true;
        }
        if($flag == true){
            return back()->with('success','Service Details Updated Successfullty');
        }
    }

}
