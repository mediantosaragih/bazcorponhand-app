@extends('layout.main')

@section('title', 'Employe')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Shift Daily</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Shift Daily</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid px-4">
            <div class="card shadow mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header mb-2">
                        <div class="">
                        <a href="{{ route('admin.shift_daily.create') }}" class="btn btn-success">Tambah Shift Daily</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Shift Daily Code</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Break Time</th>
                                        <th>Day Type</th>
                                        <th>Flexible Shift</th>
                                        <th>Remark</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($shift_daily as $shift_daily)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td style="">
                                            <a href="{{ route('admin.shift_daily.detail') }}">
                                                <span class="js-lists-values-shift_daily_code">{{$shift_daily->shift_daily_code}}</span>
                                            </a>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-start_time">{{$shift_daily->start_time}}</span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-end_time">{{$shift_daily->end_time}}</span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-break_time">{{$shift_daily->break_time}}</span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-day_type">{{$shift_daily->day_type}}</span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-flexible_shift">{{$shift_daily->flexible_shift}}</span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-remark">{{$shift_daily->remark}}</span>
                                        </td>
                                        <td style="width: 10px;" align="center" >
                                            <a href="{{ route('admin.shift_daily.edit', ['shift_daily_code' => $shift_daily->shift_daily_code]) }}">
                                            <span class="icon">
                                                <i class="fas fa-pencil-alt"></i> <!-- Icon pensil (pencil) -->
                                            </span>
                                            </a>
                                            <a href="{{ route('admin.shift_daily.destroy', ['shift_daily_code' => $shift_daily->shift_daily_code]) }}">
                                                <span class="icon">
                                                    <i class="fas fa-trash-alt"></i> <!-- Icon tong sampah (trash) -->
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop