@extends('admin.layout.layout')
@section('body')
<link rel="stylesheet" href="{{asset('datatables.net_1.13.6_css_jquery.dataTables.min.css')}}">
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
                <small>News</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="{{ route('dashboard') }}"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">News</li>
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
                                <a class="btn btn-primary" href="{{route('news.create')}}"> <i
                                    class="fa fa-list"></i> News Form </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if ($message = Session::get('success'))
                            <span style="color: green">{{$message}}</span>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="example">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Title</th>
                                            <th>Details</th>
                                            <th>Date</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($news as $k=>$v)
                                        <tr>
                                            <td>
                                                <label>{{++$k}}</label>
                                            </td>
                                            <td>{{$v->title}}</td>
                                            <td>{{$v->details}}</td>
                                            <td>
                                                <?php $date = \Carbon\Carbon::parse($v->date); ?>
                                                {{$date->format('d F, Y')}}
                                            </td>
                                            <td><img src="{{url('image/news',$v->image)}}" alt="User Image"
                                                    height="150" width="250"></td>
                                            <td>
                                                <a href="{{route('news.show',$v->id)}}" class="btn btn-info btn-xl"><i
                                                        class="fa fa-plus"></i></a><br><br>
                                                <a href="{{route('news.edit',$v->id)}}" class="btn btn-info btn-xl"><i
                                                        class="fa fa-pencil"></i></a>
                                                <form action="{{route('news.destroy',$v->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <br>
                                                    <button type="submit" class="btn btn-danger btn-xl"
                                                        onclick="return confirm('are you sure?')"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="map1" class="hidden-xs hidden-sm hidden-md hidden-lg"></div>
                    </div>
                </div>
             
               
        
              
            </div> <!-- /.row -->
        </section> <!-- /.content -->

    </div> <!-- /.content-wrapper -->
 @include('admin.footer.footer')
</div> <!-- ./wrapper -->

<script src="{{asset('jquery.com_jquery-3.7.0.js')}}"></script>
<script src="{{asset('datatables.net_1.13.6_js_jquery.dataTables.min.js')}}"></script>
<script src="{{asset('datatables.net_scroller_2.2.0_js_dataTables.scroller.min.js')}}"></script>
<script src="{{asset('datatables.net_rowgroup_1.4.0_js_dataTables.rowGroup.min.js')}}"></script>
<script>
    new DataTable('#example', {
        order: [[2, 'asc']],
        // rowGroup: {
        //     dataSrc: 2
        // }
    });
    </script>
@endsection
