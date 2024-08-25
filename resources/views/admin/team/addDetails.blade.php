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
                <h1> Details Form</h1>
                <small> Add Team Details</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="{{ route('dashboard') }}"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Team Details</li>
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
                                    <a class="btn btn-primary" href="{{route('teams.index')}}"> <i
                                            class="fa fa-list"></i> Team List </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if ($message = Session::get('success'))
                            <span style="color: green">{{$message}}</span>
                            @endif
                            <form class="col-sm-12" action="{{route('addTeamDetails')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-12 form-group">
                                    <label>Name</label>
                                    <input type="hidden" value="{{$team->id}}" name="team_id">
                                    <input type="text" class="form-control" name="title"
                                        placeholder="Enter the service Title" value="{{$team->name}}" disabled><br>

                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Degree</label>
                                    <input type="text" class="form-control time" name="degree" @if (!empty($details))
                                        value=" {{$details->degree}}" @endif>

                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image">
                                    @if (!empty($details))
                                    <img src="{{url('image/team',$details->image)}}" alt="" height="250" width="350">
                                    @endif

                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Quotation</label>
                                    <textarea name="quotation" id="" class="form-control" cols="10" rows="5"
                                        placeholder="Enter an quotation of your service">
                                        @if (!empty($details))  {{$details->quotation}}  @endif      </textarea>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Details</label>
                                    <textarea name="details" id="" class="form-control" cols="15" rows="7"
                                        placeholder="Enter details of your service">
                                        @if (!empty($details)) {{$details->details}} @endif </textarea>
                                </div>

                                <div class="col-sm-6 form-group">
                                    <label>office</label>
                                    <input type="text" class="form-control" name="office" @if (!empty($details))
                                        value=" {{$details->office}}" @endif>

                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>university</label>
                                    <input type="text" class="form-control" name="university" @if (!empty($details))
                                        value=" {{$details->university}}" @endif>

                                </div>
                                <div class="col-sm-6 form-group">
                                    <div class="row">

                                        <div class="col-md-9">
                                            <label>Areas of Expertise</label>

                                            @if (!empty($details->areas_of_expertise))
                                            <?php $data = json_decode($details->areas_of_expertise);?>
                                            @foreach ($data as $t=>$items)
                                            <input type="text" class="form-control expert" name="areas_of_expertise[]"
                                                value="{{$items}}"><br>
                                            @endforeach

                                            @else
                                            <input type="text" class="form-control expert"
                                                name="areas_of_expertise[]"><br>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <br>
                                            <button class="btn btn-info " id="exprt" type="button"> Add
                                                More</button>
                                        </div>


                                    </div>
                                    <span class="more"></span>

                                </div>
                                <div class="col-sm-6 form-group">


                                    <div class="row">

                                        <div class="col-md-9">
                                            <label>Time Schedule</label>
                                            @if (!empty($details->time_schedule))
                                            <?php $data = json_decode($details->time_schedule); ?>
                                            @foreach ($data as $t=>$item)
                                            <input type="text" class="form-control" name="time_schedule[]"
                                                value="{{$item}}"><br>
                                            @endforeach
                                            @else
                                            <input type="text" class="form-control" name="time_schedule[]"><br>

                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <br>
                                            <button class="btn btn-info " id="times" type="button"> Add
                                                More</button>
                                        </div>
                                    </div>
                                    <span class="moreTime"></span>
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        let count = 0;
        $('#exprt').on('click',function(e){
            count++;
            e.preventDefault();
            let row = `<div class="row remove_${count}"><div class="col-md-9"><input type="text" name="areas_of_expertise[]" class="form-control" placeholder="Areas of Expertise"></div><div class="col-md-3"><button type="button" class="btn btn-danger removeEX" value="${count}">Remove</button></div><br></div>`
            $('.more').append(row)
        })
        $(document).on('click','.removeEX',function(){
               let test = $(this).attr('value')
                $('.remove_'+test).remove()
             
       });
       $(document).on('click','#times',function(e){
        count++;
            e.preventDefault();
            let rows= `<div class="row removes_${count}"><div class="col-md-9"><input type="text" name="time_schedule[]" class="form-control" placeholder="date and time"></div><div class="col-md-3"><button type="button" class="btn btn-danger removeEXs" value="${count}">Remove</button></div><br></div>`
            $('.moreTime').append(rows)
       })
       $(document).on('click','.removeEXs',function(){
               let test = $(this).attr('value')
                $('.removes_'+test).remove()
             
       });
    })
</script>