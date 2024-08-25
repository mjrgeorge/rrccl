@extends('front.layout.layout')
@section('body')
@include('front.header.header')
<marquee behavior="" direction="" style="background: #27477d; color: white; margin-bottom: -8px; height: 33px;
font-size: 19px;">{{$general->marquee_text}}</marquee>

<div class="breadcumb-wrapper">
    <div class="parallax" data-parallax-image="{{url('assets/img/breadcurmb/breadcurmb-1-1.jpg')}}"></div>
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">News</h1>
            <div class="breadcumb-menu-wrap">
                <i class="far fa-home-lg"></i>
                <ul class="breadcumb-menu">
                    <li>
                        <a href="{{route('index')}}">Home</a>
                    </li>
                    <li class="active">Latest News</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="vs-blog-wrapper space-top space-md-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach ($newsDetails as $v)
                <div class="vs-blog blog-single">
                    <div class="blog-img">
                        <a href="{{route('news_deails',$v->id)}}">
                            <img src="@if(!empty($v->news->image)) {{url('image/news',$v->news->image)}}  @endif" alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="#">
                                <i class="fal fa-eye"></i><?php $date = \Carbon\Carbon::parse($v->news->date); ?>
                                {{$date->format('d F, Y')}}
                            </a>
                        </div>
                        <h2 class="blog-title h3">
                            <a href="{{route('news_deails',$v->id)}}">{{$v->news->title}}</a>
                        </h2>
                        <p>{{$v->news->details}}</p>
                        <a href="{{route('news_deails',$v->id)}}" class="link-btn">Read More
                            <i class="fal fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                @endforeach
                
              
                <div class="vs-pagination pb-30">
                    {{ $newsDetails->links("pagination::bootstrap-4")}}
                </div>
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
                            @foreach ($newsDetails as $k=>$v)
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