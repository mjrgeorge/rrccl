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
                <h1> Service Form</h1>
                <small> Add Service Details</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="{{ route('dashboard') }}"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Service Details</li>
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
                                    <a class="btn btn-primary" href="{{route('services.index')}}"> <i class="fa fa-list"></i> Service List </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if ($message = Session::get('success'))
                            <span style="color: green">{{$message}}</span>
                            @endif
                            <form class="col-sm-12" action="{{route('serviceDetailsAdd')}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-12 form-group">
                                    <label>Service Title</label>
                                    <input type="hidden" value="{{$service->id}}" name="service_id">
                                    <input type="text" class="form-control" name="title" placeholder="Enter the service Title" value="{{$service->title}}" disabled><br>
                                    
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Big Image</label>
                                    <input type="file" class="form-control" name="big_image">
                                    @if (!empty($details))
                                       <img src="{{url('image/service/details',$details->big_image)}}" alt="" height="250" width="350">
                                    @endif
                                  
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Treatment Name</label>
                                    <input type="text" class="form-control" name="treatment_name" placeholder="Treatment Name" @if (!empty($details)) value="{{$details->treatment_name}}"  @endif >
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Time Duration</label>
                                    <input type="text" class="form-control" name="time_duration" placeholder="Time Duration ex: More Than 12 Hour"
                                    @if (!empty($details)) value="{{$details->time_duration}}" @endif >
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Doctor Name</label>
                                    <input type="text" class="form-control" name="doctor_name" placeholder="Doctor Name" @if (!empty($details)) value="{{$details->doctor_name}}" @endif 
                                    >
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Quotation</label>
                                    <textarea name="quotation" id="" class="form-control" cols="10" rows="5" placeholder="Enter an quotation of your service">   
                                        @if (!empty($details))  {{$details->quotation}}  @endif      </textarea> 
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Big Details</label>
                                    <textarea name="details" id="" class="form-control" cols="15" rows="7" placeholder="Enter details of your service">   
                                        @if (!empty($details)) {{$details->details}} @endif </textarea>
                                </div>
                                <div class="col-md-12 col-xl-12">
                                    <div class="row">
                                        <div class="col-sm-4 form-group">
                                            <label>Short Image One</label> <span style="color: red">Optional</span>
                                            <input type="file" class="form-control" name="short_image_one">
                                            @if (!empty($details))
                                               <img src="{{url('image/service/details',$details->short_image_one)}}" alt="" height="150" width="250">
                                            @endif 
                                           
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label>Dr. Name</label> <span style="color: red">Optional</span>
                                            <input type="text" class="form-control" name="fst_image_nm" value =" @if (!empty($details)) {{$details->fst_image_nm}} @endif ">
                                           
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label>Designation</label> <span style="color: red">Optional</span>
                                            <input type="text" class="form-control" name="fst_image_dgn" value =" @if (!empty($details)) {{$details->fst_image_dgn}} @endif ">
                                           
                                        </div>
                                    </div>
                                </div>
                               <div class="col-md-12 col-xl-12">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Short Image Two</label> <span style="color: red">Optional</span>
                                        <input type="file" class="form-control" name="short_image_two">
                                        @if (!empty($details))  
                                          <img src="{{url('image/service/details',$details->short_image_two)}}" alt="" height="150" width="250">
                                        
                                        @endif 
                                       
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Dr Name</label> <span style="color: red">Optional</span>
                                        <input type="text" class="form-control" name="snd_image_nm" value =" @if (!empty($details)) {{$details->snd_image_nm}} @endif ">
                                       
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Designation</label> <span style="color: red">Optional</span>
                                        <input type="text" class="form-control" name="snd_image_dgn" value =" @if (!empty($details)) {{$details->snd_image_dgn}} @endif ">
                                        
                                       
                                    </div>
                                </div>
                               </div>
                                <div class="col-md-12 col-xl-12">
                                    <div class="row">
                                        <div class="col-sm-4 form-group">
                                            <label>Short Image Three</label> <span style="color: red">Optional</span>
                                            <input type="file" class="form-control" name="short_image_three">
                                            @if (!empty($details)) 
                                               <img src="{{url('image/service/details',$details->short_image_three)}}" alt="" height="150" width="250">
                                            @endif 
                                            
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label>Dr Name</label> <span style="color: red">Optional</span>
                                            <input type="text" class="form-control" name="trd_image_nm" value =" @if (!empty($details)) {{$details->trd_image_nm}} @endif ">
                                           
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label>Designation</label> <span style="color: red">Optional</span>
                                            <input type="text" class="form-control" name="trd_image_dgn" value =" @if (!empty($details)) {{$details->trd_image_dgn}} @endif ">
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Second Title</label> <span style="color: red">Optional</span>
                                    <input type="text" class="form-control" name="second_title"  @if (!empty($details)) value=" {{$details->second_title}}"  @endif >
                                   
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Second Details</label> <span style="color: red">Optional</span>
                                    <textarea name="second_details" id="" class="form-control" cols="15" rows="5" placeholder="Enter second details of your service">    @if (!empty($details)) {{$details->second_details}} @endif </textarea>
                                </div>
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