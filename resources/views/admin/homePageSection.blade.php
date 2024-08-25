@extends('admin.layout.layout')
@section('body')
<div class="wrapper">
    @include('admin.header.header')
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
  @include('admin.header.sideBar')
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn"><i
                                class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
            <div class="header-icon">
                <i class="fa fa-tachometer"></i>
            </div>
            <div class="header-title">
                <h1> Dashboard</h1>
                <small> Dashboard features</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="{{ route('dashboard') }}"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Home Page Section</li>
                </ol>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- calender -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a class="btn btn-primary" href="#"> <i
                                    class="fa fa-list"></i> Update Home Page Section </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-12" action="{{route('updateHomePage',$home->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="col-sm-12 form-group">
                                    <label>Service Headings</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" name="service_headings">{{$home->service_headings}}</textarea>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Care Headings</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" name="care_headings">{{$home->care_headings}}</textarea>
                                    {{-- <input type="text" class="form-control" name="care_headings" value="{{$home->care_headings}}"> --}}
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Care Details</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" name="care_details">{{$home->care_details}}</textarea>
                                    {{-- <input type="text" class="form-control" name="care_headings" value="{{$home->care_headings}}"> --}}
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{$home->phone}}">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Years of Experience</label>
                                    <input type="text" class="form-control" name="years_of_ex" value="{{$home->years_of_ex}}">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Care Photo</label>
                                    <input type="file" class="form-control" name="care_photo" value="{{$home->care_photo}}">
                                    <img src="{{url('image/',$home->care_photo)}}" height="150px" alt="">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Care Video</label>
                                    <input type="text" class="form-control" name="care_video" value="{{$home->care_video}}">
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Our Mission</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" name="our_mission"
                                        >{{$home->our_mission}}</textarea>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Our Vision</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" name="our_vision"
                                        >{{$home->our_vision}}</textarea>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Project Details</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" name="project_details"
                                        >{{$home->project_details}}</textarea>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Health Service Headings</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" name="health_service_headings"
                                        >{{$home->health_service_headings}}</textarea>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Pro Consult Headings</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" name="pro_consult_headings"
                                        >{{$home->pro_consult_headings}}</textarea>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Testomonial Details</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" name="testomonial_details"
                                        >{{$home->testomonial_details}}</textarea>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>News Details</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" name="news_details"
                                        >{{$home->news_details}}</textarea>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <input type="submit" value="Update" class="btn btn-info">
                                </div>

                               

                            </form>
                        </div>
                        <div id="map1" class="hidden-xs hidden-sm hidden-md hidden-lg"></div>
                    </div>
                </div>
             
               
        
              
            </div> <!-- /.row -->
        </section> <!-- /.content -->

    </div> <!-- /.content-wrapper -->
 @include('admin.footer.footer')
</div> <!-- ./wrapper -->
@endsection