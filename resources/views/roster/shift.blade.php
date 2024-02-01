@extends('layout.main')

@section('title', 'Employe')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Shift </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Shift </li>
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
                        <a href="{{route('admin.shift_daily.create')}}" class="btn btn-success">Tambah Shift Daily</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>                                  
                                        <th>Shift Code</th>
                                        <th>Nama Shift</th>
                                        <th>Data Type</th>
                                        <th>Flexible Time</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_shifts as $shift)
                                    <tr>
                                        <td style="">
                                            <span class="js-lists-values-nama">{{$shift->shift_code}}</span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-nama">{{$shift->nama_shift}}</span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-nama">{{$shift->data_type}}</span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-nama">{{$shift->flexible_time}}</span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-nama">{{$shift->start_time}}</span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-nama">{{$shift->end_time}}</span>
                                        </td>
                                        <td style="width: 10px;" align="center" >
                                        <a href="">
                                            <span class="icon">
                                                <i class="fas fa-pencil-alt"></i> <!-- Icon pensil (pencil) -->
                                            </span>
                                            </a>
                                            <a href="">
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