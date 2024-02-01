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
                    <!-- <div class="card-header mb-2">
                        <div class="">
                        <a href="{{route('admin.shift_daily.create')}}" class="btn btn-success">Tambah Shift Daily</a>
                        </div>
                    </div> -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID Karywan</th>
                                        <th>Nama Karywan</th>
                                        <th>Group</th>  
                                        <th>Jenis Kelamin</th>
                                        <th>Action</th>                                      
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data_karyawan as $absensi)
                                    <tr>
                                        <td>{{ $absensi->general_karyawan_id }}</td>
                                        <td>{{ $absensi->general_nickname }}</td>
                                        <td>{{ $absensi->general_nickname }}</td>
                                        <td>{{ $absensi->general_jenis_kelamin }}</td>
                                            <td style="width: 10px;" align="center" >
                                            <a href="{{ route('admin.shift_daily.show', ['id' => $absensi->id]) }}">
                                                <span class="icon">
                                                    <i class="fas fa-eye"></i> <!-- Icon pensil (pencil) -->
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