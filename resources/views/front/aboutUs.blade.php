@extends('front.layout.layout')
@section('body')
@include('front.header.header')
<marquee behavior="" direction="" style="background: #27477d; color: white; margin-bottom: -8px; height: 33px;
font-size: 19px;">{{$general->marquee_text}}</marquee>
<div class="breadcumb-wrapper">
    
    <div class="parallax" data-parallax-image="assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">About Us</h1>
            <div class="breadcumb-menu-wrap">
                <i class="far fa-home-lg"></i>
                <ul class="breadcumb-menu">
                    <li>
                        <a href="{{route('index')}}">Home</a>
                    </li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="vs-about-wrapper space">
    <div class="parallax" data-parallax-image="assets/img/bg/bg-7.jpg"></div>
    <div class="container">
        <div class="row flex-row-reverse">
            <!--<div class="col-lg-6 mb-40 mb-lg-0">-->
            <!--    <div class="vs-surface wow" data-wow-delay="0.3s">-->
            <!--        <div class="about-img3 position-relative">-->
            <!--            <img src="{{url('image/',$home->care_photo)}}" alt="About Image" class="w-100">-->
            <!--            <a href="{{$home->care_video}}"-->
            <!--                class="popup-video play-btn style2 position-center">-->
            <!--                <i class="fas fa-play"></i>-->
            <!--            </a>-->
            <!--            <div class="exp-box-bottom bg-white">-->
            <!--                <div class="exp-year text-theme">-->
            <!--                    <span class="counter">{{$home->years_of_ex}}</span>+-->
            <!--                </div>-->
            <!--                <p class="exp-text text-title mb-0">Years of Experience</p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="col-lg-12 align-self-center">
                <div class="about-content mb-2" style="text-align: center">
                    <!--<span class="sec-subtitle text-theme h3 mb-2 mb-sm-0">Medical & General Care!</span>-->
                    <div class="row" style="text-align: center">
                        <div class="col-xl-10">
                            <h2 class="h1 mb-3">
                                <!--{{$home->care_headings}}-->
                                Welcome Rayhans Radiance Clinic & Cancer Centre Limited
                            </h2>
                        </div>
                        <div class="col-xl-11">
                            <p class="mb-4">
                                Rayhans Radiance Clinic & Cancer Centre Ltd (hereinafter referred to as the “Company” or “Rayhans Clinic & Cancer Centre” or “Rayhans Clinic” or “RRCCL” established by virtue of Companies Act 1994 and registered under the Registrar of Joint Stock Companies and Firms (RJSC) on 13 March, 2023. Rayhans Radiance Clinic & Cancer Centre Limited is the private clinic for cancer diagnosis, treatment and management and general medical treatment. It is an academic research clinic and cancer research Centre that focused on integrated health care, education, research and training. It intends to serve people through medical services and consultation of expert doctors in various departments. Apart from cancer treatment, Rayhans Clinic offer multispecialty services including General Medicines, Dentistry, Orthopaedic, General Surgery, ENT, Family medicine, Obstetrics and Gynecology, Physiotherapy. We specialize in preventive and curative services while maintaining an efficient and effective service as well as enhancing clinical outcome.
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-5">
                                   <div class="media-style1" >
                                    <div class="media-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                    <h3 class="media-title">CALL ANYTIME 24/7</h3>
                                    <p class="media-text">
                                        <a href="tel:{{$general->phone}}">{{$general->phone}}</a>
                            </p>
                        </div>
                    </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                    
                 
                    <!--<a href="about.html" class="vs-btn">Learn More</a>-->
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pb-30 pb-lg-0">
    <div class="parallax" data-parallax-image="assets/img/bg/bg-8.jpg"></div>

    <section class="vs-skill-wrapper">
        <div class="container">
            <div class="skill-wrap1 bg-white">
                <div class="row justify-content-center justify-content-lg-between">
                    @foreach ($about as $v)
                    <div class="col-md-6 col-lg-auto mb-30">
                        <div class="d-xl-flex text-center text-xl-start skill-box">
                            <span class="ripple-icon hover-style2 align-self-start mb-20 mb-xl-0 mr-20">
                                <i class="{{$v->icon}}"></i>
                            </span>
                            <div class="media-body">
                                <h2 class="mt-n2 mb-0 text-theme">{{$v->number}}+</h2>
                                <p class="text-title fs-md fw-medium mt-1 mt-xl-0 mb-2 mb-xl-2">{{$v->title}}
                                </p>
                                <p class="fs-xs mb-0">{{$v->details}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                   
                </div>
            </div>
        </div>
    </section>

    <section class="vs-accordion-wrapper space-top space-md-bottom">
        
        <div class="container">
            
            <div class="row">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="about-content">
                        <span class="h3 text-theme sec-subtitle mb-2 mb-md-0">7 Star Care & Protection</span>
                        <h2 class="h1">{{$choose->title}}</h2>
                        <p class="pe-xl-2 text-title">{{$choose->details}}</p>
                        <div class="row pt-3">
                            <div class="col-sm-6 col-lg-5 col-xl-6">
                                <div class="d-flex mb-25">
                                    <span class="text-theme mr-20">
                                        <i class="flaticon-security fa-3x lh-1"></i>
                                    </span>
                                    <div class="media-body">
                                        <h3 class="h5 mb-2 pb-1">100% Safe & Trused</h3>
                                        <p class="mb-0 fs-xs">{{$choose->safe_trust}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-5 col-xl-6">
                                <div class="d-flex mb-25">
                                    <span class="text-theme mr-20">
                                        <i class="flaticon-computer-mouse fa-3x lh-1"></i>
                                    </span>
                                    <div class="media-body">
                                        <h3 class="h5 mb-2 pb-1">Specialist Surgery</h3>
                                        <p class="mb-0 fs-xs">{{$choose->specialist}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-5 col-xl-6">
                                <div class="d-flex mb-25">
                                    <span class="text-theme mr-20">
                                        <i class="flaticon-healthcare fa-3x lh-1"></i>
                                    </span>
                                    <div class="media-body">
                                        <h3 class="h5 mb-2 pb-1">24/7 take care staff</h3>
                                        <p class="mb-0 fs-xs">{{$choose->take_care}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-5 col-xl-6">
                                <div class="d-flex mb-25">
                                    <span class="text-theme mr-20">
                                        <i class="flaticon-laboratory-equipment fa-3x lh-1"></i>
                                    </span>
                                    <div class="media-body">
                                        <h3 class="h5 mb-2 pb-1">Medicine service</h3>
                                        <p class="mb-0 fs-xs">{{$choose->medicine}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="vs-accordion accordion accordion-style2" id="vsaccordion">
                        @foreach ($ab as $k=>$v)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button @if($k!=0) collapsed  @endif" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse_{{$v->id}}" aria-expanded="true"
                                    aria-controls="collapse1">{{$v->title}}</button>
                            </h2>
                            <div id="collapse_{{$v->id}}" class="accordion-collapse collapse @if($k==0) show  @endif"
                                data-bs-parent="#vsaccordion">
                                <div class="accordion-body">
                                    <p>{{$v->details}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                       
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>




<section class="vs-blog-wrapper space-top space-md-bottom">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="section-title">
                    <span class="h3 text-theme sec-subtitle">Blog Posts</span>
                    <h2 class="h1">Latest Blogs</h2>
                    <p>{{$home->news_details}}</p>
                </div>
            </div>
        </div>
        <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.3s" data-slide-show="3" data-lg-slide-show="2">
            @foreach ($blogDetails as $k=>$v)
            @if (!empty($v->blog->image))
            <div class="col-xl-4">
                <div class="vs-blog blog-card">
                    <div class="blog-img">
                        <img src="{{url('image/blog',$v->blog->image)}}" alt="Blog Image" class="w-100">
                        <div class="blog-date">
                           <?php $date = \Carbon\Carbon::parse($v->blog->date); ?>
                                            {{-- {{$date->format('F d , Y')}} --}}
                            <div class="day">{{$date->day}}</div>{{ $date->format('M Y') }}
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="{{route('blog_deails',$v->id)}}">
                                <?php $data = json_decode($v->tag); ?>
                                <i class="far fa-folder"></i>{{$data[0]}}
                            </a>
                            <a href="{{route('blog_deails',$v->id)}}">
                                <i class="fal fa-user"></i>{{$v->author}}
                            </a>
                        </div>
                        <h3 class="blog-title h5 font-body lh-base">
                            <a href="{{route('blog_deails',$v->id)}}">{{$v->blog->title}}</a>
                        </h3>
                        <a href="{{route('blog_deails',$v->id)}}" class="link-btn">Read More
                            <i class="far fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach


        </div>
    </div>
</section>

<div class="vs-brand-wrapper space-md bg-light">
    <div class="container">
          <div class="row text-center justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="section-title">
                    <span class="h3 text-theme sec-subtitle">Partners</span>
                    <h2 class="h1">Trusted Partners</h2>
                    <p>Our Trusted Partners</p>
                </div>
            </div>
        </div>
        <div class="wow fadeInUp" data-wow-delay="0.3s">
            
            <div class="row vs-carousel text-center" data-slide-show="5" data-lg-slide-show="4"
                data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="1">
                @foreach ($p as $v)
                <div class="col-auto">
                    <div class="brand">
                        <img src="{{url('image/partner',$v->logo)}}" alt="Brand Image">
                    </div>
                </div>  
                @endforeach
                
                
            </div>
        </div>
    </div>
</div>



@include('front.footer.footer')
@endsection