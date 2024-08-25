@extends('front.layout.layout')
@section('body')
@include('front.header.header')
<marquee behavior="" direction="" style="background: #27477d; color: white; margin-bottom: -8px; height: 33px;
font-size: 19px;">{{$general->marquee_text}}</marquee>
<div class="breadcumb-wrapper">
    <div class="parallax" data-parallax-image="assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Research People</h1>
            <div class="breadcumb-menu-wrap">
                <i class="far fa-home-lg"></i>
                <ul class="breadcumb-menu">
                    <li>
                        <a href="{{route('index')}}">Home</a>
                    </li>
                    <li class="active">Our Doctors</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="vs-team-wrapper space">
    <div class="container">
        <div class="row">
            <!-- @foreach ($teamDetails as $k=>$v)-->
            <!--{{-- <div class="col-md-6 col-xl-4 mb-30 wow fadeInUp" data-wow-delay="0.3s">-->
            <!--    <div class="team-card">-->
            <!--        <div class="team-head">-->
            <!--            <img src="{{url('image/team',$v->team->image)}}" alt="Team Area" class="w-100">-->
                        <!--<div class="team-card-links">-->
                        <!--    <a class="team-links-toggler" href="#">-->
                        <!--        <i class="fas fa-share-alt"></i>-->
                        <!--    </a>-->
                        <!--    <div class="team-social">-->
                        <!--        <a href="{{$v->team->facebook}}">-->
                        <!--            <i class="fab fa-facebook-f"></i>-->
                        <!--        </a>-->
                        <!--        <a href="{{$v->team->twitter}}">-->
                        <!--            <i class="fab fa-twitter"></i>-->
                        <!--        </a>-->
                        <!--        <a href="{{$v->team->linkedin}}">-->
                        <!--            <i class="fas fa-basketball-ball"></i>-->
                        <!--        </a>-->
                        <!--    </div>-->
                        <!--</div>-->
            <!--        </div>-->
            <!--        <div class="team-body">-->
            <!--            <h3 class="h4 mb-0">-->
            <!--                <a href="{{route('teamDetails',$v->id)}}" class="text-reset">{{$v->team->name}}</a>-->
            <!--            </h3>-->
            <!--            <p class="fs-xs degi text-theme mb-2">{{$v->team->expertise}}</p>-->
            <!--            <p class="fs-xs">{{$v->team->details}}</p>-->
            <!--            <div class="">-->
            <!--                <p class="fs-xs team-info">-->
            <!--                    <i class="fas fa-phone text-theme"></i>-->
            <!--                    <a class="text-reset" href="tel:{{$v->team->phone}}">{{$v->team->phone}}</a>-->
            <!--                </p>-->
            <!--                <p class="fs-xs team-info">-->
            <!--                    <i class="fas fa-envelope text-theme"></i>-->
            <!--                    <a class="text-reset" href="mailto:{{$v->team->email}}">{{$v->team->email}}</a>-->
            <!--                </p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div> --}}-->
            <!--@if ($k%2==0)-->
            <!--<div class="col-md-12 col-xl-12 mb-30 wow fadeInUp" data-wow-delay="0.3s">-->
            <!--    <div class="team-card">-->

            <!--        <div class="row">-->
            <!--            <div class="col-md-4 col-xl-4">-->
            <!--                <img src="{{url('image/team',$v->team->image)}}" alt="Team Area" class="w-100">-->
                            <!--<div class="team-card-links">-->
                            <!--    <a class="team-links-toggler" href="#">-->
                            <!--        <i class="fas fa-share-alt"></i>-->
                            <!--    </a>-->
                            <!--    <div class="team-social">-->
                            <!--        <a href="{{$v->team->facebook}}">-->
                            <!--            <i class="fab fa-facebook-f"></i>-->
                            <!--        </a>-->
                            <!--        <a href="{{$v->team->twitter}}">-->
                            <!--            <i class="fab fa-twitter"></i>-->
                            <!--        </a>-->
                            <!--        <a href="{{$v->team->linkedin}}">-->
                            <!--            <i class="fas fa-basketball-ball"></i>-->
                            <!--        </a>-->
                            <!--    </div>-->
                            <!--</div>-->
            <!--            </div>-->
            <!--            <div class="col-md-8 col-xl-8">-->
            <!--                <h3 class="h4 mb-0">-->
            <!--                    <a href="{{route('teamDetails',$v->id)}}" class="text-reset">{{$v->team->name}}</a>-->
            <!--                </h3>-->
            <!--                <p class="fs-xs degi text-theme mb-2">Message of {{$v->team->expertise}}</p>-->
            <!--                <p class="fs-xs">{{$v->team->details}}</p>-->
            <!--                <div class="">-->
            <!--                    <p class="fs-xs team-info">-->
            <!--                        <i class="fas fa-phone text-theme"></i>-->
            <!--                        <a class="text-reset" href="tel:{{$v->team->phone}}">{{$v->team->phone}}</a>-->
            <!--                    </p>-->
            <!--                    <p class="fs-xs team-info">-->
            <!--                        <i class="fas fa-envelope text-theme"></i>-->
            <!--                        <a class="text-reset" href="mailto:{{$v->team->email}}">{{$v->team->email}}</a>-->
            <!--                    </p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--@else-->
            <!--<div class="col-md-12 col-xl-12 mb-30 wow fadeInUp" data-wow-delay="0.3s">-->
            <!--    <div class="team-card">-->

            <!--        <div class="row">-->
            <!--            <div class="col-md-8 col-xl-8" style="padding: 30px">-->
            <!--                <h3 class="h4 mb-0">-->
            <!--                    <a href="{{route('teamDetails',$v->id)}}" class="text-reset">{{$v->team->name}}</a>-->
            <!--                </h3>-->
            <!--                <p class="fs-xs degi text-theme mb-2">Message of {{$v->team->expertise}}</p>-->
            <!--                <p class="fs-xs">{{$v->team->details}}</p>-->
            <!--                <div class="">-->
            <!--                    <p class="fs-xs team-info">-->
            <!--                        <i class="fas fa-phone text-theme"></i>-->
            <!--                        <a class="text-reset" href="tel:{{$v->team->phone}}">{{$v->team->phone}}</a>-->
            <!--                    </p>-->
            <!--                    <p class="fs-xs team-info">-->
            <!--                        <i class="fas fa-envelope text-theme"></i>-->
            <!--                        <a class="text-reset" href="mailto:{{$v->team->email}}">{{$v->team->email}}</a>-->
            <!--                    </p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="col-md-4 col-xl-4">-->
            <!--                <img src="{{url('image/team',$v->team->image)}}" alt="Team Area" class="w-100">-->
                            <!--<div class="team-card-links">-->
                            <!--    <a class="team-links-toggler" href="#">-->
                            <!--        <i class="fas fa-share-alt"></i>-->
                            <!--    </a>-->
                            <!--    <div class="team-social">-->
                            <!--        <a href="{{$v->team->facebook}}">-->
                            <!--            <i class="fab fa-facebook-f"></i>-->
                            <!--        </a>-->
                            <!--        <a href="{{$v->team->twitter}}">-->
                            <!--            <i class="fab fa-twitter"></i>-->
                            <!--        </a>-->
                            <!--        <a href="{{$v->team->linkedin}}">-->
                            <!--            <i class="fas fa-basketball-ball"></i>-->
                            <!--        </a>-->
                            <!--    </div>-->
                            <!--</div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--@endif-->
            <!--@endforeach-->
            @foreach ($teamDetails as $k=>$v)
            <div class="col-md-6 col-xl-4 mb-30 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-card">
                    <div class="team-head">
                        <img src="{{url('image/team',$v->team->image)}}" alt="Team Area" class="w-100">
                        <div class="team-card-links">
                            <a class="team-links-toggler" href="#">
                                <i class="fas fa-share-alt"></i>
                            </a>
                            <div class="team-social">
                                <a href="{{$v->team->facebook}}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="{{$v->team->twitter}}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="{{$v->team->linkedin}}">
                                    <i class="fas fa-basketball-ball"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team-body">
                        <h3 class="h4 mb-0">
                            <a href="{{route('teamDetails',$v->id)}}" class="text-reset">{{$v->team->name}}</a>
                        </h3>
                        <p class="fs-xs degi text-theme mb-2">{{$v->team->expertise}}</p>
                        <p class="fs-xs">{{$v->team->details}}</p>
                        <div class="">
                            <p class="fs-xs team-info">
                                <i class="fas fa-phone text-theme"></i>
                                <a class="text-reset" href="tel:{{$v->team->phone}}">{{$v->team->phone}}</a>
                            </p>
                            <p class="fs-xs team-info">
                                <i class="fas fa-envelope text-theme"></i>
                                <a class="text-reset" href="mailto:{{$v->team->email}}">{{$v->team->email}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <!-- <div class="vs-pagination pt-lg-30">
        <ul>
            <li>
                <a href="#" class="active">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-angle-right"></i>
                </a>
            </li>
        </ul>
        </div> -->
    </div>
</section>

@include('front.footer.footer')
@endsection