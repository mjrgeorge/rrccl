@extends('front.layout.layout')
@section('body')
@include('front.header.header')
<marquee behavior="" direction="" style="background: #27477d; color: white; margin-bottom: -8px; height: 33px;
font-size: 19px;">{{$general->marquee_text}}</marquee>
<div class="breadcumb-wrapper">
    <div class="parallax" data-parallax-image="{{url('assets/img/breadcurmb/breadcurmb-1-1.jpg')}}"></div>
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">News Details</h1>
            <div class="breadcumb-menu-wrap"><i class="far fa-home-lg"></i>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li class="active">News Details</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="vs-blog-wrapper blog-details space-top space-md-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="vs-blog blog-single">
                    <div class="blog-img"><img src="{{url('image/news',$details->news->image)}}" alt="Blog Image"></div>
                    <div class="blog-content">
                        <div class="blog-meta"><a href="#"><i class="fal fa-eye"></i><?php $date = \Carbon\Carbon::parse($details->news->date); ?>
                                        {{$date->format('d F, Y')}}</a></div>
                        <h2 class="blog-title h3">{{$details->news->title}}</h2>
                        <p>{{$details->first_details}}</p>
                        <blockquote>
                            <p>{{$details->quotation}}</p>
                        </blockquote>
                        <p>{{$details->second_details}}</p><img
                            src="{{url('image/news/details',$details->image)}}" alt="Blog Image" class="my-30">
                        <h2>{{$details->title}}</h2>
                        <p>{{$details->final_details}}</p>
                    </div>
                    <div class="share-links clearfix">
                        <div class="row align-items-xl-center">
                            <div class="col-md-5 d-sm-flex align-items-center mb-20 mb-md-0"><span
                                    class="share-links-title">Tags:</span>
                                <div class="tagcloud">
                                    <?php $data = json_decode($details->tag); ?>
                                    @foreach ($data as $item)
                                    <a href="#">{{$item}}</a>
                                    @endforeach
                                   
                                </div>
                            </div>
                            <div class="col-md-7 d-sm-flex justify-content-md-end align-items-center"><span
                                    class="share-links-title">Social Network:</span>
                                <ul class="blog-social">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-author bg-smoke d-md-flex">
                    <div class="media-image mb-3 mb-md-0 mr-30 align-self-center"><img
                            src="{{url('human-face-icon-29.jpg')}}" alt="Blog Author Image" style="border-radius: 36%;"></div>
                    <div class="media-body">
                        <p class="author-degi text-theme mb-0">Written by</p>
                        <h3 class="author-name"><a class="text-reset" href="#">{{$details->author}}</a></h3>
                        <p class="author-text mb-0">{{$details->author_details}}</p>
                    </div>
                </div>
                {{-- <div class="vs-comment-area vs-comments-layout1">
                    <h3 class="h2 inner-title1 mb-lg-4 pb-lg-2">3 Comments</h3>
                    <ul class="comment-list">
                        <li class="vs-comment">
                            <div class="vs-post-comment">
                                <div class="author-img"><img src="assets/img/blog/comment-author-1.jpg"
                                        alt="Comment Author"></div>
                                <div class="comment-content">
                                    <h4 class="name h4">Mark Jack</h4><span class="commented-on">22 April,
                                        2023</span>
                                    <p class="text">Progressively procrastinate mission-critical action items before
                                        team building ROI. Interactively provide access to cross functional quality
                                        vectors for client-centric catalysts for change.</p>
                                    <div class="reply_and_edit"><a href="#" class="replay-btn"><i
                                                class="fas fa-reply"></i>Replay</a></div>
                                </div>
                            </div>
                            <ul class="children">
                                <li class="vs-comment">
                                    <div class="vs-post-comment">
                                        <div class="author-img"><img src="assets/img/blog/comment-author-2.jpg"
                                                alt="Comment Author"></div>
                                        <div class="comment-content">
                                            <h4 class="name h4">John Deo</h4><span class="commented-on">23 April,
                                                2023</span>
                                            <p class="text">Competently provide access to fully researched methods
                                                of empowerment without sticky models. Credibly morph front-end niche
                                                markets.</p>
                                            <div class="reply_and_edit"><a href="#"
                                                    class="replay-btn"><i class="fas fa-reply"></i>Replay</a></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="vs-comment">
                            <div class="vs-post-comment">
                                <div class="author-img"><img src="assets/img/blog/comment-author-3.jpg"
                                        alt="Comment Author"></div>
                                <div class="comment-content">
                                    <h4 class="name h4">Tara sing</h4><span class="commented-on">26 April,
                                        2023</span>
                                    <p class="text">Competently provide access to fully researched methods of
                                        empowerment without sticky models. Credibly morph front-end niche markets
                                        whereas 2.0 users. Enthusiastically seize team.</p>
                                    <div class="reply_and_edit"><a href="#" class="replay-btn"><i
                                                class="fas fa-reply"></i>Replay</a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="vs-comment-form">
                    <div class="form-title">
                        <h3 class="h2 mb-0">Leave a Comment</h3>
                        <p class="text-theme mb-4">Your email address will not be published. Required fields are
                            marked *</p>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group mb-4"><textarea placeholder="Write a Message"
                                class="form-control style3"></textarea> <i class="text-title far fa-pencil-alt"></i>
                        </div>
                        <div class="col-md-6 form-group mb-4"><input type="text" placeholder="Your Name"
                                class="form-control style3"> <i class="text-title far fa-user"></i></div>
                        <div class="col-md-6 form-group mb-4"><input type="text" placeholder="Your Email"
                                class="form-control style3"> <i class="text-title far fa-envelope"></i></div>
                        <div class="col-12 form-group mb-0"><button class="vs-btn style2">Submit Comment<i
                                    class="fas fa-chevron-right"></i></button></div>
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area pl-30">
                    <div class="widget widget_search">
                        <form class="search-form">
                            <input type="text" placeholder="Search Here">
                            <button type="submit">
                                <i class="far fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="widget widget_categories">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            @foreach ($tag as $item)
                            <li>
                                <a href="#">{{$item->title}}</a>
                            </li>    
                            @endforeach
                            
                          
                        </ul>
                    </div>
                    <div class="widget">
                        <h3 class="widget_title">Popular Posts</h3>
                        <div class="recent-post-wrap">
                            @foreach ($news_details as $k=>$v)
                                @if ($k<3)
                                <div class="thumb-post">
                                    
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a href="{{route('news_deails',$v->id)}}">{{$v->news->title}}</a>
                                        </h4>
                                        <a class="post-date" href="#">
                                            <i class="fal fa-calendar-alt"></i><?php $date = \Carbon\Carbon::parse($v->news->date); ?>
                                            {{$date->format('F d , Y')}}
                                        </a>
                                    </div>
                                </div> 
                                @endif
                            @endforeach
                            
                          
                        </div>
                    </div>
                    <div class="widget widget_tag_cloud">
                        <h3 class="widget_title">Popular Tags</h3>
                        <div class="tagcloud">
                            @foreach ($tag as $item)
                            <a href="#">{{$item->title}}</a>
                            @endforeach
                        
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@include('front.footer.footer')
@endsection