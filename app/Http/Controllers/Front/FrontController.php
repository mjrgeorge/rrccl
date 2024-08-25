<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General;
use App\Models\Slider;
use App\Models\Service;
use App\Models\ServiceDetails;
use App\Models\HomeSection;
use App\Models\Team;
use App\Models\Tag;
use App\Models\TeamDetails;
use App\Models\AboutModel;
use App\Models\WhyChooseUs;
use App\Models\Project;
use App\Models\BlogDetails;
use App\Models\NewsDetails;
use App\Models\Appointment;
use App\Models\JobPosts;
use App\Models\ContactMessage;
use App\Models\Partner;
use App\Models\VisitingHours;
use App\Models\DropdownText;
class FrontController extends Controller
{
    function index(){
      $general = General::first();
      $slider = Slider::latest()->get();
      $service = Service::latest()->get();
      $serviceDetails = ServiceDetails::latest()->get();
      $home = HomeSection::first();
      $project =  Project::latest()->get();
      $blogDetails = BlogDetails::latest()->get();
      $h = VisitingHours::get();
       return view('front.index',compact('general','slider','service','serviceDetails','home','project','blogDetails','h'));
    }
    function aboutUs(){
      $general = General::first();
      $serviceDetails = ServiceDetails::latest()->get();
      $home = HomeSection::first();
      $about = AboutModel::latest()->get();
      $choose = WhyChooseUs::first();
      $blogDetails = BlogDetails::latest()->get();
      $p = Partner::latest()->get();
      $h = VisitingHours::get();
      $ab = DropdownText::latest()->get();
       return view('front.aboutUs',compact('general','serviceDetails','home','about','choose','blogDetails','p','h','ab'));
    }
    function missionVission(){
      $general = General::first();
      $serviceDetails = ServiceDetails::latest()->get();
      $home = HomeSection::first();
      $h = VisitingHours::get();
       return view('front.missionVission',compact('general','serviceDetails','home','h'));
    }
    function managementTeam(){
      $general = General::first();
      $serviceDetails = ServiceDetails::latest()->get();
      $teamDetails = TeamDetails::latest()->get();
      $h = VisitingHours::get();
       return view('front.managementTeam',compact('general','serviceDetails','teamDetails','h'));
    }
    function blog(){
      $general = General::first();
      $blogDetails = BlogDetails::paginate(5);
      $serviceDetails = ServiceDetails::latest()->get();
      $tag = Tag::get();
      $h = VisitingHours::get();
       return view('front.blog',compact('general','serviceDetails','blogDetails','tag','h'));
    }
    function service(){
      $general = General::first();
      $serviceDetails = ServiceDetails::latest()->get();
      $teamDetails = TeamDetails::latest()->get();
      $choose = WhyChooseUs::first();
      $h = VisitingHours::get();
       return view('front.service',compact('general','serviceDetails','teamDetails','choose','h'));
    }
    function project(){
      $general = General::first();
      $project =  Project::latest()->get();
      $serviceDetails = ServiceDetails::latest()->get();
      $h = VisitingHours::get();
       return view('front.project',compact('general','serviceDetails','project','h'));
    }
    function team(){
      $general = General::first();
      $serviceDetails = ServiceDetails::latest()->get();
      $teamDetails = TeamDetails::latest()->get();
      $h = VisitingHours::get();
       return view('front.team',compact('general','serviceDetails','teamDetails','h'));
    }
    function career(){
      $general = General::first();
      $serviceDetails = ServiceDetails::latest()->get();
      $job = JobPosts::latest()->get();
      $h = VisitingHours::get();
       return view('front.career',compact('general','serviceDetails','job','h'));
    }
    function newsMedia(){
      $general = General::first();
      $serviceDetails = ServiceDetails::latest()->get();
      $newsDetails = NewsDetails::paginate(5);
      $serviceDetails = ServiceDetails::latest()->get();
      $tag = Tag::get();
      $h = VisitingHours::get();
       return view('front.newsMedia',compact('general','serviceDetails','newsDetails','tag','h'));
    }
    function contactUs(){
      $general = General::first();
      $serviceDetails = ServiceDetails::latest()->get();
      $h = VisitingHours::get();
       return view('front.contactUs',compact('general','serviceDetails','h'));
    }
    function teamDetails($id){
      $general = General::first();
      $serviceDetails = ServiceDetails::latest()->get();
      $teamDetails = TeamDetails::where('id',$id)->first();
      $h = VisitingHours::get();
       return view('front.teamDetails',compact('general','serviceDetails','teamDetails','h'));
    }
    function serviceDetailsPage($id){
      $general = General::first();
      $serviceDetails = ServiceDetails::latest()->get();
      $details = ServiceDetails::find($id);
      $h = VisitingHours::get();
       return view('front.serviceDetailsPage',compact('general','serviceDetails','details','h'));
    }
    function news_deails($id){
      $general = General::first();
      $details = NewsDetails::find($id);
      $news_details = NewsDetails::latest()->get();
      $serviceDetails = ServiceDetails::latest()->get();
      $tag = Tag::get();
      $h = VisitingHours::get();
       return view('front.newsDetailsPage',compact('general','details','serviceDetails','tag','news_details','h'));
    }
    function blog_deails($id){
      $general = General::first();
      $details = BlogDetails::find($id);
      $blog_details = BlogDetails::latest()->get();
      $serviceDetails = ServiceDetails::latest()->get();
      $tag = Tag::get();
      $h = VisitingHours::get();
       return view('front.blogDetailsPage',compact('general','serviceDetails','details','tag','blog_details','h'));
    }
    function appointment(){
      $general = General::first();
      $blog_details = BlogDetails::latest()->get();
      $serviceDetails = ServiceDetails::latest()->get();
      $tag = Tag::get();
      $h = VisitingHours::get();
       return view('front.appointment',compact('general','serviceDetails','tag','blog_details','h'));
    }
    function bookAppoinment(Request $request){
      $data = [
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'service_id'=>$request->service_id,
        'doctor'=>$request->doctor,
        'date'=>$request->date,
      ];
      $r = Appointment::create($data);
      if($r){
        return back()->with('success','Your Appoinment Has Been Booked Successfully');
      }
    }
    function sendMessage(Request $request){
      $data = [
        'name'=>$request->name,
        'email'=>$request->email,
        'message'=>$request->message,
      ];
      $r = ContactMessage::create($data);
      if($r){
        return back()->with('success','Your message has been senb Successfully');
      }
    }
}
