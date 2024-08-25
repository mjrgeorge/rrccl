@extends('front.layout.layout')
@section('body')
@include('front.header.header')
<marquee behavior="" direction="" style="background: #27477d; color: white; margin-bottom: -8px; height: 33px;
font-size: 19px;">{{$general->marquee_text}}</marquee>
<div class="breadcumb-wrapper">
    <div class="parallax" data-parallax-image="assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact Us</h1>
            <div class="breadcumb-menu-wrap">
                <i class="far fa-home-lg"></i>
                <ul class="breadcumb-menu">
                    <li>
                        <a href="{{route('index')}}">Home</a>
                    </li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="vs-contact-wrapper vs-contact-layout1 space-top space-md-bottom">
    <div class="container">
        <div class="row gx-60 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                @if ($message = Session::get('success'))
                 <span style="color: green">{{$message}}</span>
                @endif
                <form action="{{route('sendMessage')}}" method="POST"
                    class="form-wrap3 mb-30" data-bg-color="#f3f6f7">
                    @csrf                    <div class="form-title">
                        <h3 class="mt-n2 fls-n2 mb-0">Send Us a Message</h3>
                        <p class="text-theme mb-4">Your email address will not be published*</p>
                    </div>
                    <div class="form-group mb-15">
                        <input type="text" class="form-control style3" name="name" id="name" placeholder="Name"> <i
                            class="fal fa-user"></i>
                    </div>
                    <div class="form-group mb-15">
                        <input type="text" class="form-control style3" name="email" id="email" placeholder="E-mail">
                        <i class="fal fa-envelope"></i>
                    </div>
                    <div class="form-group mb-15">
                        <textarea name="message" id="message" cols="30" rows="3" class="form-control style3"
                            placeholder="Message"></textarea>
                        <i class="fal fa-pencil-alt"></i>
                    </div>
                    <div class="form-btn pt-15">
                        <button class="vs-btn style2">Send Message
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="contact-information mb-30">
                    <h2 class="mt-n2">{{$general->contact_title}}</h2>
                    <div class="row">
                        <div class="col-xxl-10">
                            <p>{{$general->contact_details}}</p>
                        </div>
                    </div>
                    {{-- <h3 class="h4 pt-2 mb-10">Opening Hours</h3>
                    <table class="contact-info-table">
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
                    </table> --}}
                    <h4 class="pt-2 mb-10">Address</h4>
                    <p class="fs-md">
                        <i class="far fa-map-marker-alt me-2"></i>{{$general->address}}
                    </p>
                    <h4 class="pt-2 mb-2">Customer Supports</h4>
                    <h4 class="h3 font-theme2 mb-0">
                        <a href="tel:{{$general->phone}}">
                            <i class="far fa-phone-alt me-2"></i>{{$general->phone}}
                        </a>
                    </h4>
                </div>
            </div>
        </div>
        <div class="ratio ratio-21x9 contact-map mt-70 mb-30">
            <iframe
                src="{{$general->map}}"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

@include('front.footer.footer')
@endsection