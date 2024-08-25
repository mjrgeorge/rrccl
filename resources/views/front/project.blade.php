@extends('front.layout.layout')
@section('body')
@include('front.header.header')
<marquee behavior="" direction="" style="background: #27477d; color: white; margin-bottom: -8px; height: 33px;
font-size: 19px;">{{$general->marquee_text}}</marquee>
<div class="breadcumb-wrapper">
    <div class="parallax" data-parallax-image="assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Ongoing Projects</h1>
            <div class="breadcumb-menu-wrap">
                <i class="far fa-home-lg"></i>
                <ul class="breadcumb-menu">
                    <li>
                        <a href="{{route('index')}}">Home</a>
                    </li>
                    <li class="active">Projects</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="vs-project-wrapper space">
    <div class="container z-index-common">
           <div class="row text-center justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <span class="h3 text-theme sec-subtitle">Projects</span>
                    <h2 class="h1">Our Projects</h2>
                </div>
            </div>
        </div>
        <div class="container" style="text-align: center; margin-top: -35px">
                <p>The main aim of Rayhans Radiance Clinic & Cancer Centre Ltd is to conduct clinical research that focus on application of physics for diagnosis and treatment specially for cancer and cardiac disease. RRCCL research project is a collaborative effort between many organizations. Our team collaboratively working with Dr. Anwarul Abedin Institute of Innovation, Centre for Biomedical Research (CBR) and American International University-Bangladesh (AIUB). Rayhans Clinic is open to new research collaborations. If you are interested to take part in collaboration, reach out to us. We are interested in groups that perform clinical studies with a focus on biomedical device development, molecular imaging of heart disease (atherosclerosis), radiation oncology, infectious disease, nanoparticles and orthopedics. Please email rayhans.cancerclinic@gmail.com
Education is one of the important parts of Rayhans Clinic & Cancer Centre. Our training and certificate course prepare the next generation medical physicist, physicians, radiation therapy technologist, health physicist, and other healthcare professionals for leadership roles in the life sciences and medicine, especially as related to cancer. Our educational collaborators with Centre for Biomedical Research (CBR) and American International University-Bangladesh (AIUB) We offer different certificate and training course in area of radiation sciences. We also offer postgraduate research fellowship that provide medical physicist and scientists with laboratory research training to train skilled manpower who seek special expertise in a particular type of cancer. We are committed to improving the quality of care for cancer patients.</p></br></br></br>
            
        </div>
               @foreach ($project as $k=>$v)
            @if ($k%2==0)
            <div class="col-md-12 col-xl-12 mb-30 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-card">

                    <div class="row">
                        <div class="col-md-4 col-xl-4">
                            <img src="{{url('image/project',$v->image)}}" alt="Team Area" class="w-100">
                      
                        </div>
                        <div class="col-md-8 col-xl-8">
                            <h3 class="h4 mb-0">
                                <a href="#" class="text-reset">{{$v->title}}</a><br><br>
                            </h3>
                            <p class="fs-xs">{{$v->details}}</p>
                      
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-12 col-xl-12 mb-30 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-card">

                    <div class="row">
                       <div class="col-md-8 col-xl-8">
                            <h3 class="h4 mb-0">
                            <a href="#" class="text-reset"> {{$v->title}}</a><br><br>
                            </h3>
                            <p class="fs-xs">{{$v->details}}</p>
                            
                        </div>
                        <div class="col-md-4 col-xl-4">
 <img src="{{url('image/project',$v->image)}}" alt="Team Area" class="w-100">
                       
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

    </div>
</section>


@include('front.footer.footer')
@endsection