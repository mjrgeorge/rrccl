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
                <h1> Blog Form</h1>
                <small> Add Blog Details</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="{{ route('dashboard') }}"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Blog Details</li>
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
                                    <a class="btn btn-primary" href="{{route('blogs.index')}}"> <i class="fa fa-list"></i> Blog List </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if ($message = Session::get('success'))
                            <span style="color: green">{{$message}}</span>
                            @endif
                            <form class="col-sm-12" action="{{route('blogDetailsAdd')}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-12 form-group">
                                    <label>Blog Title</label>
                                    <input type="hidden" value="{{$blog->id}}" name="blog_id">
                                    <input type="text" class="form-control" name="title_not_used" placeholder="Enter the service Title" value="{{$blog->title}}" disabled><br>
                                    
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>First Details</label>
                                    <textarea name="first_details" id="" class="form-control" cols="10" rows="5" placeholder="Enter an quotation of your service">   
                                        @if (!empty($details))  {{$details->first_details}}  @endif      </textarea> 
                                  
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Quotation</label>
                                    <textarea name="quotation" id="" class="form-control" cols="10" rows="5" placeholder="Enter an quotation of your service">   
                                        @if (!empty($details))  {{$details->quotation}}  @endif      </textarea> 
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Second Details</label>
                                    <textarea name="second_details" id="" class="form-control" cols="10" rows="5" placeholder="Enter an quotation of your service">   
                                        @if (!empty($details))  {{$details->second_details}}  @endif </textarea> 
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title" @if (!empty($details)) value="{{$details->title}}" @endif 
                                    >
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Final Details</label>
                                    <textarea name="final_details" id="" class="form-control" cols="10" rows="5" placeholder="Enter an quotation of your service">   
                                        @if (!empty($details))  {{$details->final_details}}  @endif      </textarea> 
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Author</label>
                                    <input type="text" class="form-control" name="author" placeholder="Doctor Name" @if (!empty($details)) value="{{$details->author}}" @endif >
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Author Details</label>
                                    <textarea name="author_details" id="" class="form-control" cols="15" rows="7" placeholder="Enter details of your service">   
                                        @if (!empty($details)) {{$details->author_details}} @endif </textarea>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Image</label> <span style="color: red">Optional</span>
                                    <input type="file" class="form-control" name="image">
                                    @if (!empty($details))
                                       <img src="{{url('image/blog/details',$details->image)}}" alt="" height="150" width="250">
                                    @endif 
                                   
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Tag</label> <span style="color: red">Optional</span>
                                    <select name="tag[]" multiple id="" class="form-control">
                                         @if (!empty($details->tag))
                                       <?php $data = json_decode($details->tag) ?>
                                        @foreach ($data as $item)
                                            <option value="{{$item}}" selected>{{$item}}</option>
                                        @endforeach
                                       @endif
                                            @foreach ($tag as $item)
                                                <option value="{{$item->title}}" >{{$item->title}}</option>
                                            @endforeach
                                   
                                    </select>
                                   
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