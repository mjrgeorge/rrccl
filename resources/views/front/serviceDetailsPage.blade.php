@extends('front.layout.layout')
@section('body')
@include('front.header.header')
<marquee behavior="" direction="" style="background: #27477d; color: white; margin-bottom: -8px; height: 33px;
font-size: 19px;">{{$general->marquee_text}}</marquee>
<div class="breadcumb-wrapper">
    <div class="parallax" data-parallax-image="{{url('assets/img/breadcurmb/breadcurmb-1-1.jpg')}}"></div>
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{$details->service->title}}</h1>
            <div class="breadcumb-menu-wrap"><i class="far fa-home-lg"></i>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li class="active">{{$details->service->title}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="vs-service-wrapper space-top space-md-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="service-content mb-30">
                    <div class="vs-surface wow" data-wow-delay="0.3s"><img
                            src="{{url('image/service/details',$details->big_image)}}" alt="Service Image"
                            class="w-100"></div>
                    <div class="row justify-content-center">
                        <div class="col-xl-11 col-xxl-10">
                            <div class="service-bar">
                                <div
                                    class="row justify-content-between align-items-center gy-4 text-center text-lg-start">
                                    <div class="col-sm-6 col-lg-auto"><span class="fs-xs">Treatment Name</span>
                                        <h2 class="h5 mb-0">{{$details->treatment_name}}</h2>
                                    </div>
                                    <div class="col-sm-6 col-lg-auto"><span class="fs-xs">Time Duration</span>
                                        <h2 class="h5 mb-0">{{$details->time_duration}}</h2>
                                    </div>
                                    <div class="col-sm-6 col-lg-auto"><span class="fs-xs">Doctor Name</span>
                                        <h2 class="h5 mb-0">{{$details->doctor_name}}</h2>
                                    </div>
                                    <div class="col-sm-6 col-lg-auto"><a href="{{route('appointment')}}"
                                            class="vs-btn style2">Appointment<i class="fal fa-calendar-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="fs-md text-title mb-4 pb-2">{{$details->quotation}}</p>
                    <p>{{$details->details}}</p>
                    <div class="row mt-40 mb-20">
                        @if (!empty($details->short_image_one))
                        <div class="col-lg-4 mb-30" style="text-align: center">
                            <img src="{{url('image/service/details',$details->short_image_one)}}" alt="Service Image"
                                class="w-100"><br><br>
                                <h5>Name: {{$details->fst_image_nm}}</h5>
                                <h5>Designation: {{$details->fst_image_dgn}}</h5>
                        </div>
                        @endif

                        <div class="col-lg-4 mb-30" style="text-align: center">
                            @if (!empty($details->short_image_two))
                            <img src="{{url('image/service/details',$details->short_image_two)}}" alt="Service Image"
                                class="w-100"><br><br>
                                <h5>Name: {{$details->snd_image_nm}}</h5>
                                <h5>Designation: {{$details->snd_image_dgn}}</h5>
                            @endif

                        </div>

                        <div class="col-lg-4 mb-30" style="text-align: center">
                            @if (!empty($details->short_image_three))
                            <img src="{{url('image/service/details',$details->short_image_three)}}" alt="Service Image"
                                class="w-100"><br><br>
                            <h5>Name: {{$details->trd_image_nm}}</h5>
                            <h5>Designation: {{$details->trd_image_dgn}}</h5>
                            @endif

                        </div>
                    </div>
                    <h3>{{$details->second_title}}</h3>
                    <p>{{$details->second_details}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('front.footer.footer')
@endsection