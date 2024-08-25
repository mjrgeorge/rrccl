@extends('front.layout.layout')
@section('body')
@include('front.header.header')
<marquee behavior="" direction="" style="background: #27477d; color: white; margin-bottom: -8px; height: 33px;
font-size: 19px;">{{$general->marquee_text}}</marquee>
<section class="appointment-wrapper space-top space-md-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mb-30">
                <div class="about-content">
                    <span class="sec-subtitle text-theme h3 mb-2 mb-sm-0">Medical &amp; General Care!</span>
                    <h2 class="h1 mb-3">Our Mission</h2>
                    <div class="row">
                        <div class="col-xl-10 mb-md-2 pb-md-1">
                            <p class="mb-md-4">{{$home->our_mission}}
                            </p>
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
                   <div class="form-box">
                       <div class="row">
                          <img src="{{url('image/1.jpg')}}" alt="" style="" class="image-responsive">
                       </div>
                   </div>
               
            </div>
        </div>
    </div>
</section>



@include('front.footer.footer')
@endsection