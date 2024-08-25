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
                <h1> Slider Form</h1>
                <small> Add Slider</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="{{ route('dashboard') }}"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Slider</li>
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
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="{{route('slider.index')}}"> <i class="fa fa-list"></i> Slider List </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if ($message = Session::get('success'))
                            <span style="color: green">{{$message}}</span>
                            @endif
                            <form class="col-sm-12" action="{{route('slider.store')}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-12 form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image"><br>
                                    {{-- <img src="{{url('image/logo/',$general->logo)}}" alt=""> --}}
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Slider Text First</label>
                                    <input type="text" class="form-control" name="slider_text_one"
                                        value="{{old('slider_text_one')}}"
                                        placeholder="Enter The First Text of your Slider">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>SLider Text Second</label>
                                    <input type="text" class="form-control" name="slider_text_two"
                                        value="{{old('slider_text_two')}}"
                                        placeholder="Enter The Second Text of your Slider">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select><br>
                                    <input type="submit" value="Insert" class="btn btn-info">
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