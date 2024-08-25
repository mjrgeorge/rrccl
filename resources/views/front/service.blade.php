@extends('front.layout.layout')
@section('body')
@include('front.header.header')
<marquee behavior="" direction="" style="background: #27477d; color: white; margin-bottom: -8px; height: 33px;
font-size: 19px;">{{$general->marquee_text}}</marquee>
<section class="features-wrapper" data-bg-src="assets/img/bg/bg-shape-10.jpg">
    <div class="container vs-container p-0">
        <div class="row gx-0">
            {{-- <div class="col-xl col-xxl">
                <div class="features-video-box position-relative vs-surface wow" data-wow-delay="0.3s"
                    data-bg-src="assets/img/about/video-img.jpg"><a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                        class="play-btn popup-video style2 position-center"><i class="fas fa-play"></i></a></div>
            </div> --}}
            <div class="col-xl-12 col-xxl-12">
                <div class="features-inner">
                    <div class="row justify-content-center justify-content-xl-start">
                        <div class="col-md-10 col-lg-7 col-xl-9 mb-4">
                            <div class="features-about text-center text-xl-start">
                                <h2 class="h1 title-divider">{{$choose->title}}</h2>
                                <p>{{$choose->details}}</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12 col-xxl-12">
                            <div class="row justify-content-center justify-content-xl-start">
                                <div class="col-sm-6 col-xxl-auto mb-30">
                                    <div class="feaures-mark text-center text-md-start"><span class="mark-icon"><i
                                                class="far fa-check"></i></span>
                                        <h3 class="mark-title h5 mb-1">Medicine service</h3>
                                        <p class="mark-text fs-xs mb-0">{{$choose->medicine}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xxl-auto mb-30">
                                    <div class="feaures-mark text-center text-md-start"><span class="mark-icon"><i
                                                class="far fa-check"></i></span>
                                        <h3 class="mark-title h5 mb-1">Specialist Surgery</h3>
                                        <p class="mark-text fs-xs mb-0">{{$choose->specialist}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xxl-auto mb-30">
                                    <div class="feaures-mark text-center text-md-start"><span class="mark-icon"><i
                                                class="far fa-check"></i></span>
                                        <h3 class="mark-title h5 mb-1">100% Safe & Trused</h3>
                                        <p class="mark-text fs-xs mb-0">{{$choose->safe_trust}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xxl-auto mb-30">
                                    <div class="feaures-mark text-center text-md-start"><span class="mark-icon"><i
                                                class="far fa-check"></i></span>
                                        <h3 class="mark-title h5 mb-1">24/7 take care staff</h3>
                                        <p class="mark-text fs-xs mb-0">{{$choose->take_care}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="vs-team-wrapper space-top space-md-bottom">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <div class="sec-icon"><i class="flaticon-ecg"></i></div>
                    <h2 class="h1">Our Team</h2>
                    <p>Proactively revolutionize granular customer service after pandemic internal or "organic"
                        sources istinctively impact proactive human</p>
                </div>
            </div>
        </div>
        <div class="row vs-carousel wow fadeIn" data-wow-delay="0.3s" data-arrows="true" data-slide-show="3"
            data-lg-slide-show="2">
            @foreach ($teamDetails as $k=>$v)
            <div class="col-xl-4 mb-30" >
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
    </div>
</section>


@include('front.footer.footer')
@endsection