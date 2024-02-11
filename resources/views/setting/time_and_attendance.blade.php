
@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Time & Attendance Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Setting</a></li>
              <li class="breadcrumb-item active">Time & Attendance</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{route('admin.setting.time-and-attendance.leave-setting')}}" style="">
                        <div class="card-setting center">
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fas fa-calendar-check "></i>
                                </div>
                                <div class="col-md-9">
                                    <h5>Leave Setting</h5>
                                    <p>Customize your leave preferences and notification settings.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" style="">
                        <div class="card-setting center">
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fas fa-user "></i>
                                </div>
                                <div class="col-md-9">
                                    <h5>Shift Daily</h5>
                                    <p>Customize employee's personal daily shift setting.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" style="">
                        <div class="card-setting center">
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fas fa-users "></i>
                                </div>
                                <div class="col-md-9">
                                    <h5>Shift Group</h5>
                                    <p>Customize group of employee's daily shift setting.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
      </section>
  </div>

@endsection
