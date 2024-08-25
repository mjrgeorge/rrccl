@extends('front.layout.layout')
@section('body')
@include('front.header.header')
<marquee behavior="" direction="" style="background: #27477d; color: white; margin-bottom: -8px; height: 33px;
font-size: 19px;">{{$general->marquee_text}}</marquee>
<div class="breadcumb-wrapper">
    <div class="parallax" data-parallax-image="{{url('assets/img/breadcurmb/breadcurmb-1-1.jpg')}}"></div>
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Appointment</h1>
            <div class="breadcumb-menu-wrap"><i class="far fa-home-lg"></i>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li class="active">Appointment</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="appointment-wrapper space">
    <div class="container">
        <div class="row gx-40">
            <div class="col-xl-12 mb-40 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                @if ($message = Session::get('success'))
                 <span style="color: green">{{$message}}</span>
                @endif
                <form action="{{route('bookAppoinment')}}" class="form-wrap1 shadow-none mb-0" method="POST"
                    data-bg-color="#f3f6f7">
                    @csrf
                    <div class="form-title-box bg-title" data-bg-src="assets/img/bg/bg-shape-9.jpg">
                        <div class="row justify-content-between align-items-center">
                            <div class="col">
                                <h2 class="h4 mb-2 text-white">Book An Appointment</h2>
                                <p class="mb-0 text-white-light">Please Call Us To Ensure Your Appointment</p>
                            </div>
                            <div class="col-auto d-none d-sm-block"><a href="tel:{{$general->phone}}"
                                    class="ripple-icon style2"><i class="fas fa-phone"></i></a></div>
                        </div>
                    </div>
                    <div class="form-box">
                        <div class="row">
                            <div class="col-lg-6 form-group"><select class="form-select style3" name="service_id">
                                    <option hidden disabled="disabled" selected="selected">Select Services</option>
                                    @foreach ($serviceDetails as $k=>$v)
                                    <option value="{{$v->service->id}}">{{$v->service->title}}</option>
                                    @endforeach

                                </select></div>
                            <div class="col-lg-6 form-group"><select class="form-select style3" name="doctor">
                                    <option hidden disabled="disabled" selected="selected">Choose Doctor</option>
                                    <option value="Dr. Jahid Hasan">Dr. Jahid Hasan</option>
                                    <option value="Dr. Ashik Mujtahid">Dr. Ashik Mujtahid</option>
                                    <option value="Dr. Minhaj">Dr. Minhaj</option>
                                    <option value="Dr. Min">Dr. Min</option>
                                </select></div>
                            <div class="col-lg-6 form-group"><input type="text" class="form-control style3"
                                    placeholder="Your Name" name="name"> <i class="fal small fa-user"></i></div>
                            <div class="col-lg-6 form-group"><input type="email" class="form-control style3"
                                    placeholder="Email Address" name="email"> <i class="fal small fa-envelope"></i>
                            </div>
                            <div class="col-lg-6 form-group"><input type="number" class="form-control style3"
                                    placeholder="Your Phone" name="phone"> <i class="fal small fa-phone"></i></div>
                            <div class="col-lg-6 form-group"><input type="text"
                                    class="dateTime-pick form-control style3" placeholder="Select Date & Time"
                                    name="date"> <i class="fal small fa-calendar-alt"></i></div>
                            <div class="col-xl-12 text-center"><button type="submit" class="vs-btn style2">Make
                                    Appointment<i class="far fa-calendar-alt"></i></button></div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>


@include('front.footer.footer')
@endsection