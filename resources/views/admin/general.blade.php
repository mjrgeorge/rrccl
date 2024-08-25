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
                    <li class="active">General</li>
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
                                <h4>Update General Information</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-12" action="{{route('updateGenral')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$general->id}}">
                                <div class="col-sm-12 form-group">
                                    <label>Logo</label>
                                    <input type="file" class="form-control" name="logo"><br>
                                    <img src="{{url('image/logo/',$general->logo)}}" alt="">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{$general->email}}">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{$general->phone}}">
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Address</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" name="address"
                                        >{{$general->address}}</textarea>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Footer Text</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" name="footer_text"
                                        >{{$general->footer_text}}</textarea>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Copyright Text</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" name="copy_right_text"
                                        >{{$general->copy_right_text}}</textarea>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Front Marquee Text</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" name="marquee_text"
                                        >{{$general->marquee_text}}</textarea>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Contact Title</label>
                                    <input type="text" class="form-control" name="contact_title" value="{{$general->contact_title}}">
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Contact Details</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" name="contact_details"
                                        >{{$general->contact_details}}</textarea>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Map</label>
                                    <input type="text" class="form-control" name="map" value="{{$general->map}}">
                                </div>
                                <!--<div class="col-sm-12 form-group">-->
                                <!--    <label>Copy Right Text</label>-->
                                <!--    <input type="text" class="form-control" name="copy_right" value="{{$general->copy_right}}">-->
                                <!--</div>-->

                                <input type="submit" value="Update" class="btn btn-info">

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