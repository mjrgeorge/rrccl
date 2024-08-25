<footer class="footer-wrapper footer-layout1" data-bg-src="{{url('assets/img/bg/bg-shape-4.png')}}">
    <div class="container">
        <div class="footer-top">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6 col-md-auto text-center text-sm-start">
                    <div class="footer1-logo bg-white">
                        <a href="{{route('index')}}">
                            <img src="{{url('image/logo',$general->logo)}}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-auto pt-20 pt-sm-0 pb-20 pb-sm-0 text-center text-sm-end">
                    <div class="footer-social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="far fa-basketball-ball"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-3 col-xl-3">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">About Us</h3>
                        <div class="vs-widget-about">
                            <p> {{$general->footer_text}}</p>
                            <h4>
                                <a class="text-theme hover-white" href="tel:{{$general->phone}}">
                                    <i class="fas fa-phone-volume me-2 pe-1"></i>{{$general->phone}}
                                </a>
                            </h4>
                            {{-- <div class="d-flex mt-3 pt-1">
                                <div class="avater-small mr-20">
                                    <img src="{{url('assets/img/author/author-2-3.jpg')}}" alt="Avater Image">
                                </div>
                                <div class="media-body align-self-center">
                                    <h5 class="mb-0 font-body lh-1 text-white">Dr. Example Khan</h5>
                                    <span class="text-theme fs-xs lh-1">Senior Consultant</span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-auto col-xl-auto">
                    <div class="widget footer-widget widget_nav_menu">
                        <h3 class="widget_title">Services</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                @foreach ($serviceDetails as $k=>$v)
                                @if ($k<5)
                                <li>
                                    <a href="{{route('serviceDetailsPage',$v->id)}}">{{$v->service->title}}</a>
                                </li> 
                                @endif
                                
                                @endforeach
                                
                             
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-lg-3 col-xl-auto">
                    <div class="widget footer-widget">
                        <h4 class="widget_title">Gallery Posts</h4>
                        <div class="footer-gallery">
                            <div class="gal-item">
                                <a href="#">
                                    <img src="{{url('assets/img/widget/gal-1-1.jpg')}}" alt="Gallery Image" class="w-100">
                                </a>
                            </div>
                            <div class="gal-item">
                                <a href="#">
                                    <img src="{{url('assets/img/widget/gal-1-2.jpg')}}" alt="Gallery Image" class="w-100">
                                </a>
                            </div>
                            <div class="gal-item">
                                <a href="#">
                                    <img src="{{url('assets/img/widget/gal-1-3.jpg')}}" alt="Gallery Image" class="w-100">
                                </a>
                            </div>
                            <div class="gal-item">
                                <a href="#">
                                    <img src="{{url('assets/img/widget/gal-1-4.jpg')}}" alt="Gallery Image" class="w-100">
                                </a>
                            </div>
                            <div class="gal-item">
                                <a href="#">
                                    <img src="{{url('assets/img/widget/gal-1-4.jpg')}}" alt="Gallery Image" class="w-100">
                                </a>
                            </div>
                            <div class="gal-item">
                                <a href="#">
                                    <img src="{{url('assets/img/widget/gal-1-6.jpg')}}" alt="Gallery Image" class="w-100">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-6 col-lg-3 col-xl-3">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Visiting Hours</h3>
                        <div class="footer-table">
                            <table>
                                @foreach ($h as $v)
                                <tr>
                                    <td>{{$v->day}}:</td>
                                    <td>{{$v->time}}</td>
                                </tr>
                                @endforeach
                                
                               
                            </table>
                        </div>
                        <div class="address-line">
                            <i class="far fa-map-marker-alt text-theme fs-md"></i>
                            <a href="#" class="text-reset fs-md">{{$general->address}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright bg-theme">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto text-center text-md-end">
                    <p class="mb-0 text-white">Copyright
                        <i class="fal fa-copyright"></i> 2023 All rights reserved by
                        <a class="text-white" href="{{route('index')}}">Mi21 International</a>.
                    </p>
                </div>
                <div class="col-auto d-none d-md-block">
                    <ul class="footer-bottom-menu">
                        <li>
                            <a href="#">Privacy</a>
                        </li>
                        <li>
                            <a href="#">Terms</a>
                        </li>
                        <li>
                            <a href="{{route('contactUs')}}"">Contact</a>
                        </li>
                        <li>
                            <a href="{{route('aboutUs')}}"">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>