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
                    <li class="active">About Us</li>
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
                                <a class="btn btn-primary" href="#"> <i class="fa fa-list"></i>About Us Form </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if ($message = Session::get('success'))
                            <span style="color: green">{{$message}}</span>
                            @endif
                            <form class="col-sm-12" action="{{route('projects.update',$project->id)}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="col-sm-12 form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title"
                                        placeholder="Enter the service Title" value="{{$project->title}}"><br>

                                </div>
                             
                                <div class="col-sm-12 form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image" 
                                        placeholder="Section">
                                        <img src="{{url('image/project',$project->image)}}" alt="" width="30%" height="200px">
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Details</label>
                                    <textarea name="details" id="" cols="30" rows="10" class="form-control">{{$project->details}}</textarea>
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