@extends('front.layout.layout')
@section('body')

@include('front.header.header')


<section class="vs-hero-wrapper position-relative">
    <marquee behavior="" direction="" style="background: #27477d; color: white; margin-bottom: -8px; height: 33px;
    font-size: 19px;">{{$general->marquee_text}}</marquee>
    <div class="vs-hero-carousel" data-navprevnext="true" data-height="800" data-container="1900"
        data-slidertype="responsive">
        @foreach ($slider as $k=>$v)
        <div class="ls-slide" data-ls="duration: 13000; transition2d: 5;">
            <img src="{{url('image/slider',$v->image)}}" alt="Hero Image" class="ls-bg">
            <h1 class="text-title ls-l ls-responsive" data-ls-mobile="left: 100px; top: 120px; font-size: 120px;"
                data-ls-tablet="left: 100px; top: 80px; font-size: 92px;"
                data-ls-laptop="left: 100px; top: 120px; font-size: 82px;"
                style="left: 335px; top: 208px; font-size: 72px; font-weight: 700;"
                data-ls="delayin: 600; easingin: easeInOutSine; texttransitionin: true; textstartatin: transitioninstart; textdurationin: 2000; texttypein: words_asc; textshiftin: 200; textoffsetyin: -100; offsetyout: -100; durationout: 2000; ">
                {{$v->slider_text_one}}</h1>
            <h1 class="text-white ls-l ls-responsive" data-ls-mobile="left: 100px;  top: 285px; font-size: 120px;"
                data-ls-tablet="left: 100px; top: 210px; font-size: 92px;"
                data-ls-laptop="left: 100px; top: 230px; font-size: 82px;"
                style="left: 335px; top: 290px; font-size: 72px; font-weight: 700;"
                data-ls="delayin: 0; easingin: easeInOutSine; texttransitionin: true; textstartatin: transitioninstart; textdurationin: 2000; texttypein: words_asc; textshiftin: 200; textoffsetyin: -100; offsetyout: -100; durationout: 2000; ">
                {{$v->slider_text_two}}</h1>
            <p class="ls-l text-white ls-responsive ls-hide-sm" data-ls-mobile="left: 100px; "
                data-ls-tablet=" left: 100px; top: 360px; font-size: 34px; width: 1000px; line-height: 52px;"
                data-ls-laptop="left: 100px; top: 380px; font-size: 26px; width: 800px; line-height: 48px;"
                style="left: 335px; top: 400px; width: 605px; font-size: 16px; font-weight: 400; white-space: normal; letter-spacing: 0.02em; line-height: 28px;"
                data-ls="delayin: 800; texttransitionin: true; textstartatin: transitioninstart; texttypein: lines_asc; textshiftin: 100; textoffsetyin: 100; textdurationin: 2000; offsetyout: 100; durationout: 2000; ">
                .. </p>
            <div class="ls-btn ls-l ls-responsive" data-ls-mobile="left: 100px; "
                data-ls-tablet="left: 100px; top: 580px;" data-ls-laptop="left: 100px; top: 580px;"
                style="left: 335px; top: 518px;"
                data-ls="offsetyin: 200; durationin: 2000; delayin: 1400; offsetyout: 300; durationout: 2000; offsetyout: 100; durationout: 2000; ">
                <a href="{{route('service')}}" class="vs-btn style3 hover-white">View All Services<i class="fas fa-bolt"></i>
                </a>
            </div>
        </div>
        @endforeach


    </div>
</section>

<section class="vs-service-wrapper space-top space-md-bottom">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <span class="h3 text-theme sec-subtitle">Our Service</span>
                    <h2 class="h1">Our Services</h2>
                    <p>{{$home->service_headings}}</p>
                </div>
            </div>
        </div>
        <div class="row vs-carousel wow fadeIn" data-wow-delay="0.3s" data-slide-show="3">
            @foreach ($serviceDetails as $k=>$v)
            <div class="col-xl-4 mb-25">
                <div class="service-box">
                    <div class="sr-img">
                        <img src="{{url('image/service',$v->service->image)}}" alt="Service Image" class="w-100">
                    </div>
                    <div class="sr-icon">
                        <i class="{{$v->service->icon}}"></i>
                    </div>
                    <div class="sr-content">
                        <h3 class="h4">
                            <a class="text-reset"
                                href=" {{route('serviceDetailsPage',$v->id)}}  ">{{$v->service->title}}</a>
                        </h3>
                        <p class="fs-xs">{{$v->service->details}}</p>
                    </div>
                    <a href="{{route('serviceDetailsPage',$v->id)}} " class="icon-btn style4">
                        <i class="far fa-long-arrow-alt-right"></i>
                    </a>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>

<section class="vs-about-wrapper space">
    <div class="parallax" data-parallax-image="assets/img/bg/bg-7.jpg"></div>
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-6 mb-40 mb-lg-0">
                <div class="vs-surface wow" data-wow-delay="0.3s">
                    <div class="about-img3 position-relative">
                        <img src="{{url('image/',$home->care_photo)}}" alt="About Image" class="w-100">
                        <a href="{{$home->care_video}}" class="popup-video play-btn style2 position-center">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="exp-box-bottom bg-white">
                            <div class="exp-year text-theme">
                                <span class="counter">{{$home->years_of_ex}}</span>+
                            </div>
                            <p class="exp-text text-title mb-0">Years of Experience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-content mb-2">
                    <span class="sec-subtitle text-theme h3 mb-2 mb-sm-0">Medical & General Care!</span>
                    <div class="row">
                        <div class="col-xl-10">
                            <h2 class="h1 mb-3">
                                {{$home->care_headings}}
                            </h2>
                        </div>
                        <div class="col-xl-10">
                            <p class="mb-4">{{$home->care_details}}</p>
                        </div>
                    </div>
                    <div class="media-style1">
                        <div class="media-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-title">CALL ANYTIME 24/7</h3>
                            <p class="media-text">
                                <a href="tel:{{$home->phone}}">{{$home->phone}}</a>
                            </p>
                        </div>
                    </div>
                    <a href="{{route('aboutUs')}}" class="vs-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="appointment-wrapper space-top space-md-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mb-30">
                <div class="about-content">
                    <span class="sec-subtitle text-theme h3 mb-2 mb-sm-0">Medical &amp; General Care!</span>
                    <h2 class="h1 mb-3">Our Mission</h2>
                    <div class="row">
                        <div class="col-xl-10 mb-md-2 pb-md-1">
                            <p class="mb-md-4">{{$home->our_mission}}</p>
                        </div>

                        <h2 class="h1 mb-3">Our Vision</h2>
                        <div class="row">
                            <div class="col-xl-10 mb-md-2 pb-md-1">
                                <p class="mb-md-4">{{$home->our_vision}}</p>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="col-xl-6 mb-30 pt-30 pt-xl-0">
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

<section class="vs-project-wrapper position-relative space-top pb-50" data-bg-color="#f9f9f9">
    <div class="project-shape" data-bg-src="assets/img/bg/bg-shape-7.jpg"></div>
    <div class="container z-index-common">
        <div class="row text-center justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="section-title">
                    <span class="h3 text-theme sec-subtitle">Case Study</span>
                    <h2 class="h1 text-white">Latest Projects</h2>
                    <p class="text-white">{{$home->project_details}}</p>
                </div>
            </div>
        </div>
        <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.3s" data-slide-show="3">
            @foreach ($project as $k=>$v)
            <div class="col-xl-4">
                <div class="vs-project-box mb-30">
                    <div class="project-img">
                        <img src="{{url('image/project',$v->image)}}" alt="Project Image" class="w-100">
                    </div>
                    <div class="project-content">
                        <span class="project-cat fs-xs">{{$v->section}}</span>
                        <h4 class="project-name">{{$v->title}}</h4>
                        <a href="{{url('image/project',$v->image)}}" class="icon-btn style4 popup-image">
                            <i class="fal fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<div data-bg-src="assets/img/bg/bg-shape-8.jpg">
    <section class="vs-middle-box-wrapper space-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6 mb-30 mb-lg-0">
                    <div class="vs-middle-box d-md-flex text-center text-md-start bg-theme">
                        <div class="media-icon mb-20 mb-md-0 mr-20">
                            <img src="assets/img/icons/icon-1-1.png" alt="Icon">
                        </div>
                        <div class="media-body align-self-center">
                            <span class="text-white fs-xs">Health Services</span>
                            <h4 class="text-white mb-0">{{$home->health_service_headings}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="vs-middle-box d-md-flex text-center text-md-start bg-title">
                        <div class="media-icon mb-20 mb-md-0 mr-20">
                            <img src="assets/img/icon/icon-1-1-001.png" alt="Icon">
                        </div>
                        <div class="media-body align-self-center">
                            <span class="text-theme fs-xs">Professinal Consult</span>
                            <h4 class="text-title mb-0 text-white">{{$home->pro_consult_headings}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="testimonial-wrapper space-bottom">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <span class="h3 text-theme sec-subtitle">Testimonial</span>
                        <h2 class="h1">Patient Says</h2>
                        <p>{{$home->testomonial_details}}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.3s" data-slide-show="2">
                        <div class="col-xl-6">
                            <div class="testimonial-box mb-30 bg-white">
                                <div class="content">
                                    <p class="fs-md">Uniquely strategize 2.0 portals after fully researched vortals.
                                        Quickly repurpose front-end metrics through</p>
                                </div>
                                <div class="author-img">
                                    <div class="avater-line"></div>
                                    <div class="avater">
                                        <img src="assets/img/author/author-2-1.jpg" alt="Author Image">
                                    </div>
                                </div>
                                <div class="author-info">
                                    <div class="info">
                                        <h3 class="fs-20 name">Moris Jonson</h3>
                                        <span class="fs-xs degi text-theme">CEO, Hosak Int. Ltd.</span>
                                    </div>
                                    <div class="testi-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated
                                                <strong class="rating">5.00
                                                </strong> out of 5
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial-box mb-30 bg-white">
                                <div class="content">
                                    <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et</p>
                                </div>
                                <div class="author-img">
                                    <div class="avater-line"></div>
                                    <div class="avater">
                                        <img src="assets/img/author/author-2-2.jpg" alt="Author Image">
                                    </div>
                                </div>
                                <div class="author-info">
                                    <div class="info">
                                        <h3 class="fs-20 name">Peter Parker</h3>
                                        <span class="fs-xs degi text-theme">HR, Tech Master Ltd.</span>
                                    </div>
                                    <div class="testi-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated
                                                <strong class="rating">5.00
                                                </strong> out of 5
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial-box mb-30 bg-white">
                                <div class="content">
                                    <p class="fs-md">From its medieval origins to the digital era, learn everything
                                        there is to know about ubiquitous ipsum passage</p>
                                </div>
                                <div class="author-img">
                                    <div class="avater-line"></div>
                                    <div class="avater">
                                        <img src="assets/img/author/author-2-3.jpg" alt="Author Image">
                                    </div>
                                </div>
                                <div class="author-info">
                                    <div class="info">
                                        <h3 class="fs-20 name">David Smith</h3>
                                        <span class="fs-xs degi text-theme">Founder, Ajaira LTD.</span>
                                    </div>
                                    <div class="testi-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated
                                                <strong class="rating">5.00</strong> out of 5
                                            </span>
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
</div>

<div class="vs-brand-wrapper space-md bg-light">
    <div class="container">
        <div class="wow fadeInUp" data-wow-delay="0.3s">
            <div class="row vs-carousel text-center" data-slide-show="5" data-lg-slide-show="4" data-md-slide-show="3"
                data-sm-slide-show="3" data-xs-slide-show="1">
                <div class="col-auto">
                    <div class="brand">
                        <img src="assets/img/brand/brand-1-1.svg" alt="Brand Image">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand">
                        <img src="assets/img/brand/brand-1-2.svg" alt="Brand Image">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand">
                        <img src="assets/img/brand/brand-1-3.svg" alt="Brand Image">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand">
                        <img src="assets/img/brand/brand-1-4.svg" alt="Brand Image">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand">
                        <img src="assets/img/brand/brand-1-5.svg" alt="Brand Image">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand">
                        <img src="assets/img/brand/brand-1-6.svg" alt="Brand Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


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
                                <i class="far fa-folder"></i>Temporary Text
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


@include('front.footer.footer')
@endsection