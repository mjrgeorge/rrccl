<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle">
            <i class="fal fa-times">

            </i>
        </button>
        <div class="mobile-logo">
            <a href="{{route('index')}}">
                <img src="{{url('image/logo',$general->logo)}}" alt="Medixi">
            </a>
        </div>
        <form action="#" class="mobile-menu-form">
            <input type="text" class="form-control" placeholder="Search...">
            <button type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
        <div class="vs-mobile-menu">
            <ul>
                <li>
                    <a href="{{route('index')}}">Home</a>
                </li>

                <li class="menu-item-has-children">
                    <a href="{{route('aboutUs')}}">About</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('aboutUs')}}">About Us</a>
                        </li>
                        <li>
                            <a href="{{route('missionVission')}}">Mission & Vision</a>
                        </li>
                        <li>
                            <a href="{{route('managementTeam')}}">Management Team</a>
                        </li>
                        <li>
                            <a href="{{route('blog')}}">Blog</a>
                        </li>
                        <li>
                            <a href="{{route('career')}}">Career</a>
                        </li>
                        <li>
                            <a href="{{route('contactUs')}}">Contact Us</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{route('service')}}">Services</a>
                    <ul class="sub-menu">
                        @foreach ($serviceDetails as $k=>$v)
                        <li>
                            <a href="{{route('serviceDetailsPage',$v->id)}}">{{$v->service->title}}</a>
                        </li>
                        @endforeach
                        
                    </ul>
                </li>



                <li class="menu-item-has-children">
                    <a href="#">Research & Education</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('project')}}">Ongoing Project</a>
                        </li>
                        <li>
                            <a href="{{route('team')}}">Research People</a>
                        </li>
                    </ul>
                </li>
                <li>    <a href="{{route('career')}}">Career</a>
                                    </li>

                <li>
                    <a href="{{route('newsMedia')}}">News and Media</a>
                </li>
                <li>
                    <a href="{{route('contactUs')}}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="sidemenu-wrapper d-none d-lg-block">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls">
            <i class="far fa-times"></i>
        </button>
        <div class="widget footer-widget">
            <div class="vs-widget-about">
                <div class="footer-logo">
                    <img src="{{url('image/logo',$general->logo)}}" alt="logo">
                </div>
                <p class="footer-text1">Example Example Example Example Example Example Example Example Example
                    Example Example Example Example Example Example Example Example.</p>
                <div class="footer-social3">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="widget footer-widget">
            <h3 class="widget_title">Visiting Hours
            </h3>
            <div class="footer-table">
                <table>
                    <tr>
                        <td>Mon - Fri:</td>
                        <td>8:00 am - 8:00 pm</td>
                    </tr>
                    <tr>
                        <td>Saturday:</td>
                        <td>9:00 am - 6:00 pm</td>
                    </tr>
                    <tr>
                        <td>Sunday:</td>
                        <td>9:00 am - 6:00 pm</td>
                    </tr>
                </table>
            </div>
            <div class="address-line">
                <i class="far fa-map-marker-alt text-theme fs-md"></i>
                <a href="#" class="text-reset fs-md">Sejuti Homes, E-Block, Mirpur-12, Dhaka
                </a>
            </div>
        </div>
        <div class="widget footer-widget">
            <h4 class="widget_title">Gallery Posts</h4>
            <div class="footer-gallery">
                <div class="gal-item">
                    <a href="#">
                        <img src="{{url('assets/img/widget/gal-1-1.jpg')}}" alt="Gallery Image" class="w-100"></a>
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
                        <img src="{{url('assets/img/widget/gal-1-5.jpg')}}" alt="Gallery Image" class="w-100"></a>
                </div>
                <div class="gal-item">
                    <a href="#">
                        <img src="{{url('assets/img/widget/gal-1-6.jpg')}}" alt="Gallery Image" class="w-100">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup-search-box d-none d-lg-block">
    <button class="searchClose border-theme text-theme">
        <i class="fal fa-times"></i>
    </button>
    <form action="#">
        <input type="text" class="border-theme" placeholder="What are you looking for">
        <button type="submit">
            <i class="fal fa-search"></i>
        </button>
    </form>
</div>
<header class="header-wrapper header-layout2">
    <div class="header-top  py-2 d-none d-md-block" style="background-color: #FF1694">
        <div class="container py-1" >
            <div class="row justify-content-center justify-content-xl-between">
                <div class="col-auto">
                    <ul class="header-top-info list-unstyled m-0">
                        <li>
                            <i class="far fa-envelope">
                            </i>
                            <a href="mailto:{{$general->email}}"
                                class="text-reset">{{$general->email}}</a>
                        </li>
                        <li>
                            <i class="far fa-map-marker-alt"></i>{{$general->address}}
                        </li>
                        <li>
                            <i class="far fa-clock"></i>Mon - Fri: 8:00 am - 7:00 pm
                        </li>
                        <li>
                            <i class="far fa-phone"></i>{{$general->phone}}
                        </li>
                    </ul>
                </div>
                <div class="col-auto d-none d-xl-block">
                    <ul class="head-top-links text-end">

                        <li>
                            <ul class="header-social">
                                <li>
                                    <a href="#" class="searchBoxTggler">
                                        <i class="far fa-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="sideMenuToggler">
                                        <i class="far fa-bars"></i>
                                    </a>
                                </li>


                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrap" >
        <div class="sticky-active">
            <div class="header-main py-3 py-lg-0" >
                <div class="container position-relative" >
                    <div class="row align-items-center justify-content-between" >
                        <div class="col-auto d-flex">
                            <div class="header2-logo">
                                <a href="{{route('index')}}">
                                    <img src="{{url('image/logo',$general->logo)}}" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu menu-style2 d-none d-lg-block">
                                <ul>
                                    <li>
                                        <a href="{{route('index')}}">
                                            <span class="has-new-label">Home
                                                <!-- <span class="new-label">New</span> -->
                                            </span>
                                        </a>

                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="{{route('aboutUs')}}">About</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{route('aboutUs')}}">About Us</a>
                                            </li>
                                            <li>
                                                <a href="{{route('missionVission')}}">Mission & Vision</a>
                                            </li>
                                            <li>
                                                <a href="{{route('managementTeam')}}">Management Team</a>
                                            </li>
                                            <li>
                                                <a href="{{route('blog')}}">Blog</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('service')}}">Services</a>
                                        <ul class="sub-menu">
                                            @foreach ($serviceDetails as $k=>$v)
                                            <li>
                                                <a href="{{route('serviceDetailsPage',$v->id)}}">{{$v->service->title}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Research & Education</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{route('project')}}">Ongoing Project</a>
                                            </li>
                                            <li>
                                                <a href="{{route('team')}}">Research People</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{route('career')}}">Career</a>
                                    </li>
                                    <li>
                                        <a href="{{route('newsMedia')}}">News & Media</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contactUs')}}">Contact us</a>
                                    </li>
                                </ul>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header2-btn">
                                <!-- <a href="#" class="icon-btn style3 searchBoxTggler">
												<i class="far fa-search"></i>
											</a>  -->
                                <!-- <a href="#" class="icon-btn style3 sideMenuToggler">
												<i class="far fa-bars"></i>
											</a>  -->
                                <!-- <a href="appointment.html" class="vs-btn style2">Appointment
												<i class="fal fa-calendar-alt"></i>
											</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>