@extends('front.layout.layout')
@section('body')
@include('front.header.header')
<marquee behavior="" direction="" style="background: #27477d; color: white; margin-bottom: -8px; height: 33px;
font-size: 19px;">{{$general->marquee_text}}</marquee>
<div class="breadcumb-wrapper">
    <div class="parallax" data-parallax-image="{{url('assets/img/breadcurmb/breadcurmb-1-1.jpg')}}"></div>
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{$teamDetails->name}}</h1>
            <div class="breadcumb-menu-wrap"><i class="far fa-home-lg"></i>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li class="active">Doctors Details</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="vs-details-wrapper space-top space-md-bottom">
    <div class="container">
        <div class="row gx-40">
            <div class="col-lg-5">
                <div class="member-header mb-40 overflow-hidden rounded-3 position-relative">
                    <div class="member-details-img"><img src="{{url('image/team',$teamDetails->image)}}" alt="Member Image"
                            class="w-100"></div>
                    <div class="member-angle-links">
                        <div class="shape"><img src="{{url('assets/img/bg/member-shape.png')}}" alt="Shape"></div><span
                            class="middle-icon"><i class="fas fa-share-alt"></i></span> <a href="#"><i
                                class="fab fa-facebook-f"></i></a> <a href="#"><i
                                class="fab fa-linkedin-in"></i></a> <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-skype"></i></a>
                    </div><a href="#" class="certifate-link">See My Doctoral Certificates<i
                            class="far fa-chevron-circle-right"></i></a>
                </div>
                <div class="team-schedule bg-smoke wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="h4 border-title">My Time Schedule</h3>
                    <table class="team-schedule-table">
                        <tbody>
                            <tr>
                                <td>Mon - Fri:</td>
                                <td>8.00 am - 8.00 pm</td>
                            </tr>
                            <tr>
                                <td>Saturday:</td>
                                <td>9.00 am - 6.00 pm</td>
                            </tr>
                            <tr>
                                <td>Sunday:</td>
                                <td>9.00 am - 6.00 pm</td>
                            </tr>
                        </tbody>
                    </table><a href="tel:{{$teamDetails->team->phone}}" class="vs-btn style2">{{$teamDetails->team->phone}}<i
                            class="fas fa-phone"></i></a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="team-content">
                    <h2 class="mb-0 mt-n2">{{$teamDetails->team->name}}</h2>
                    <p class="text-theme fs-xs">{{$teamDetails->degree}}</p>
                    <p class="fs-md text-title">{{$teamDetails->quotation}}</p>
                    <p>{{$teamDetails->details}}</p>
                    <table class="member-table">
                        <tbody>
                            <tr>
                                <th><strong>Speciality</strong></th>
                                <td>{{$teamDetails->team->expertise}}</td>
                            </tr>
                            <tr>
                                <th><strong>Degrees</strong></th>
                                <td><span class="text-theme">{{$teamDetails->degree}}</span></td>
                            </tr>
                            <tr>
                                <th><strong>Areas of Expertise</strong></th>
                                <td>
                                    <ul class="member-info-list">
                                        <?php $data = json_decode($teamDetails->areas_of_expertise); ?>
                                        @foreach ($data as $i=>$ex)
                                        <li>{{$ex}}</li>
                                        @endforeach
                                        
                                       
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th><strong>Office</strong></th>
                                <td>{{$teamDetails->office}}</td>
                            </tr>
                            <tr>
                                <th><strong>University</strong></th>
                                <td>{{$teamDetails->university}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="#" class="form-wrap1 shadow-none mb-30 rounded-3 overflow-hidden wow fadeInUp"
                        data-wow-delay="0.3s" data-bg-color="#f3f6f7">
                        <div class="form-title-box bg-title" data-bg-src="assets/img/bg/bg-shape-9.jpg">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-xl-10">
                                    <h2 class="h4 mb-2 text-white">Book An Appointment</h2>
                                    <p class="mb-0 text-white-light">Scenarios and economically sound ROI.
                                        Dynamically seize cross platform "outside the box" thinking after
                                        enterprise...</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-box">
                            <div class="row">
                                <div class="col-lg-6 form-group"><select class="form-select style3">
                                        <option hidden disabled="disabled" selected="selected">Select Services
                                        </option>
                                        <option>Aerospace Medicine</option>
                                        <option>Bariatric Surgery</option>
                                        <option>Infectious Diseases</option>
                                        <option>Laboratory Medicine</option>
                                    </select></div>
                                <div class="col-lg-6 form-group"><select class="form-select style3">
                                        <option hidden disabled="disabled" selected="selected">Choose Doctor
                                        </option>
                                        <option>Aerospace Medicine</option>
                                        <option>Bariatric Surgery</option>
                                        <option>Infectious Diseases</option>
                                        <option>Laboratory Medicine</option>
                                    </select></div>
                                <div class="col-lg-6 form-group"><input type="text" class="form-control style3"
                                        placeholder="Your Name"> <i class="fal small fa-user"></i></div>
                                <div class="col-lg-6 form-group"><input type="email" class="form-control style3"
                                        placeholder="Email Address"> <i class="fal small fa-envelope"></i></div>
                                <div class="col-lg-6 form-group"><input type="number" class="form-control style3"
                                        placeholder="Your Phone"> <i class="fal small fa-phone"></i></div>
                                <div class="col-lg-6 form-group"><input type="text"
                                        class="dateTime-pick form-control style3" placeholder="Select Date & Time">
                                    <i class="fal small fa-calendar-alt"></i></div>
                                <div class="col-xl-12 text-center"><button type="submit" class="vs-btn style2">Make
                                        Appointment<i class="far fa-calendar-alt"></i></button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.footer.footer')
@endsection