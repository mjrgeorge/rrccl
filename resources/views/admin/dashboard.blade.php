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
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            {{-- <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number">15</span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Active Doctors </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number">19</span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Active Patients</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number">05</span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-user-circle fa-2x"></i>
                                <h4>Representative</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number">9</span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Active Nurses</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number">6</span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-user-circle fa-2x"></i>
                                <h4> Pharmachist</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number">3</span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Labratorist</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number">4</span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Accountant</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number">7</span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Receptionist</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </section> <!-- /.content -->

    </div> <!-- /.content-wrapper -->
    @include('admin.footer.footer')
</div> <!-- ./wrapper -->
@endsection