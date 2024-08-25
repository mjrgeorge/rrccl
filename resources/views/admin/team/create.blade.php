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
                    <li class="active">Team</li>
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
                                <a class="btn btn-primary" href="{{route('teams.index')}}"> <i
                                    class="fa fa-list"></i>  Team List</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-12" action="{{route('teams.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-6 form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="" placeholder="Enter Name">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Area of Expertise</label>
                                    <input type="text" name="expertise" class="form-control" value="" placeholder="area of expertise">
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control" value="">
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Details</label>
                                   <textarea name="details" class="form-control" rows="3" placeholder="Details"></textarea>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" value="" placeholder="Phone Number">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="" placeholder="Email ID">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Facebook</label>
                                    <input type="text" name="facebook" class="form-control" value="" placeholder="facebook ID">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Twitte</label>
                                    <input type="text" name="twitter" class="form-control" value="" placeholder="twitter ID">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Linkedin </label>
                                    <input type="text" name="linkedin" class="form-control" value="" placeholder="linkedin ID">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select><br>
                                    
                                </div>
                               
                                <div class="col-sm-12 form-group">
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