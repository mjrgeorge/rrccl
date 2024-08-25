<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General;
use App\Models\User;
use App\Models\HomeSection;
use Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Appointment;
use App\Models\JobPosts;
use App\Models\ContactMessage;
use App\Models\Partner;
use App\Models\VisitingHours;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('adminLogin');
    }
    public function adminLogin()
    {
        return view('admin.login');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function general()
    {
        $general = General::first();
        return view('admin.general',compact('general'));
    }
    public function addVsitingHours()
    {
        $hours = VisitingHours::latest()->get();
        return view('admin.vist',compact('hours'));
    }
    public function addHours(Request $request)
    {
        $hours = VisitingHours::create($request->all());
        if($hours){
            return back()->with('success','added successfully');
        }
    }
    public function deleteHours(Request $request,$id)
    {
        $hours = VisitingHours::find($id);
        $h = $hours->delete();
            if($hours){
            return back()->with('success','deleted successfully');
        }
    }
    public  function updateGenral(Request $request)
    {
        $data = [
            'email'=>$request->email,
            'phone'=>$request->phone,
            'copy_right_text'=>$request->copy_right_text,
            'footer_text'=>$request->footer_text,
            'address'=>$request->address,
            'marquee_text'=>$request->marquee_text,
            'contact_title'=>$request->contact_title,
            'contact_details'=>$request->contact_details,
            'map'=>$request->map,
            'copy_right'=>$request->copy_right,
        ];
        $id = $request->id;
        if($request->file('logo')){
            $logo = $request->file('logo');
            $path = public_path('image/logo/');
        
            $name = 'logo'.time() . '.' . $logo->extension();
           Image::make($logo)->resize(158, 56)->save($path . $name);
           $data['logo'] = $name;
        }
        $g = General::find($id);
        $result = $g->update($data);

        if($result){

            return back()->with('success','Updated Successfully');
        }
    }
    public function homePageSection()
    {
        $home = HomeSection::first();
        return view('admin.homePageSection',compact('home'));
    }
    public function partner()
    {
        $partner = Partner::latest()->get();
        return view('admin.partner',compact('partner'));
    }
    public function addPartner(Request $request)
    {
        if($request->file('logo')){
            $image = $request->file('logo');
            $path = public_path('image/partner/');
        
            $name = 'partner'.time() . '.' . $image->extension();
           Image::make($image)->resize(126, 109)->save($path . $name);
           $data['logo'] = $name;
        }
        $partner = Partner::create($data);
       if($partner){
        return back()->with('success','added successfully');
       }
    }
    public function deletePartner(Request $request,$id)
    {
        $partner = Partner::find($id);
        $p = $partner->delete();
       if($p){
        return back()->with('success','deleted successfully');
       }
    }
    public function updateHomePage(Request $request, $id)
    {
        $data = [
            'service_headings'=>$request->service_headings,
            'care_headings'=>$request->care_headings,
            'care_details'=>$request->care_details,
            'phone'=>$request->phone,
            'years_of_ex'=>$request->years_of_ex,
            'care_video'=>$request->care_video,
            'our_mission'=>$request->our_mission,
            'our_vision'=>$request->our_vision,
            'project_details'=>$request->project_details,
            'health_service_headings'=>$request->health_service_headings,
            'pro_consult_headings'=>$request->pro_consult_headings,
            'testomonial_details'=>$request->testomonial_details,
            'news_details'=>$request->news_details,
        ];
        if($request->file('care_photo')){
            $photo = $request->file('care_photo');
            $path = public_path('image/');
        
            $name = 'care_photo'.time() . '.' . $photo->extension();
           Image::make($photo)->resize(578, 544)->save($path . $name);
           $data['care_photo'] = $name;
        }
        $g = HomeSection::find($id);
        $result = $g->update($data);

        if($result){

            return back()->with('success','Updated Successfully');
        }
    }
    function addUser()
    {
        $user = User::latest()->get();
        return view('admin.user.index',compact('user'));
    }
    function userAdd(Request $request)
    {
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ];
        $result = User::create($data);
        if($result){
            return back()->with('success','user added successfully');
        }
    }
    function Useredit($id)
    {
        
        $u = User::find($id);
        $user = User::latest()->get();
        return view('admin.user.edit',compact('user','u'));
    }
    function Userupdate(Request $request, $id)
    {
        
        $u = User::find($id);
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ];
        $result = $u->update($data);
        if($result){
            return redirect()->route('userAdd')->with('success','user updated successfully');
        }
    }
    function Userdestroy(Request $request, $id)
    {
        
        $u = User::find($id);
       
        $result = $u->delete();
        if($result){
            return redirect()->route('userAdd')->with('success','user deleted successfully');
        }
    }
    function getAppoinment()
    {
        $appointment = Appointment::latest()->get();
        return view('admin.appointment.index',compact('appointment'));
    }
    function jobPost()
    {
        $jobPost = JobPosts::latest()->get();
        return view('admin.job.index',compact('jobPost'));
    }
    function contactMessage()
    {
        $message = ContactMessage::latest()->get();
        return view('admin.contact.index',compact('message'));
    }
    function jobDetails($id)
    {
        $job = JobPosts::find($id);
        return view('admin.job.details',compact('job'));
    }
    function deleteAppoinment(Request $request,$id)
    {
        $appointment = Appointment::find($id);
        $r = $appointment->delete();
        return back()->with('success','deleted successfully');
    }
    function addJob(Request $request)
    {
        $data = [
            'title'=>$request->title,
        ];
        $r = JobPosts::create($data);
        if($r){
            return back()->with('success','job post addedd successfully');
        }
        
    }
    function job_delete(Request $request,$id)
    {
        $r = JobPosts::find($id);
        $re = $r->delete();
        if($re){
            return back()->with('success','job post deleted successfully');
        }
        
    }
    function addJobDetails(Request $request,$id)
    {
        $data = [
            'title'=>$request->title,
            'details'=>$request->details,           
        ];
        $r = JobPosts::find($id);
        $re = $r->update($data);
        if($re){
            return back()->with('success','job post updated successfully');
        }
        
    }

}
