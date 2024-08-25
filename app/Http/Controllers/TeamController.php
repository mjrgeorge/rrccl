<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamDetails;
use Illuminate\Http\Request;
use Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = Team::latest()->get();
        return view('admin.team.index',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name'=>$request->name,
            'expertise'=>$request->expertise,
            'details'=>$request->details,
            'status'=>$request->status,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'linkedin'=>$request->linkedin,
        ];
        if($request->file('image')){
            $image = $request->file('image');
            $path = public_path('image/team/');
        
            $name = 'service'.time() . '.' . $image->extension();
           Image::make($image)->resize(387, 325)->save($path . $name);
           $data['image'] = $name;
        }
        $result = Team::create($data);

        if($result){

            return back()->with('success','Member Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        $details = TeamDetails::where('team_id',$team->id)->first();
        return view('admin.team.addDetails',compact('team','details'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $data = [
            'name'=>$request->name,
            'expertise'=>$request->expertise,
            'details'=>$request->details,
            'status'=>$request->status,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'linkedin'=>$request->linkedin,
        ];
        if($request->file('image')){
            $image = $request->file('image');
            $path = public_path('image/team/');
        
            $name = 'team'.time() . '.' . $image->extension();
           Image::make($image)->resize(387, 325)->save($path . $name);
           $data['image'] = $name;
        }
        $g = Team::find($team->id);
        $result = $g->update($data);
        if($result){
            return redirect()->route('teams.index')->with('success','Member updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $g = Team::find($team->id);
        $result = $g->delete();
        if($result){
            return redirect()->route('teams.index')->with('success','Member deleted Successfully');
        }
    }
    public function addTeamDetails(Request $request)
    {
        $data = [
            'team_id'=>$request->team_id,
            'degree'=>$request->degree,
            'quotation'=>$request->quotation,
            'details'=>$request->details,
            'areas_of_expertise'=>json_encode($request->areas_of_expertise) ,
            'office'=>$request->office,
            'university'=>$request->university,
            'time_schedule'=>json_encode($request->time_schedule),
        ];
        if($request->file('image')){
            $image = $request->file('image');
            $path = public_path('image/team/');
        
            $name = 'team'.time() . '.' . $image->extension();
           Image::make($image)->resize(485, 606)->save($path . $name);
           $data['image'] = $name;
        }
        $details = TeamDetails::where('team_id',$request->team_id)->first();
        $flag = false;
        if($details){
            $d = TeamDetails::find($details->id);
            $result = $d->update($data);
            $flag = true;
        }else{
            $result = TeamDetails::create($data);
            $flag = true;
        }
        if($flag == true){
            return back()->with('success','team Details Updated Successfullty');
        }
    }
}
