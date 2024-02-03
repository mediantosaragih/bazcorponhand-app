@extends('layout.main')

@section('title', 'Employe')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Shift Group</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Shift Group</li>
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
                        <a href="{{route('admin.shift_group.create')}}" class="btn btn-success">Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>

                                        <tr>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <!-- <th colspan="5">Jadwal Shift</th> -->
                                        <!-- <th>Keterangan</th> -->
                                        <th>Action</th>
                                        <th >Start Time</th>
                                        <th >End Time</th>
                                        <th >Data Type</th>
                                        <th >Flexible</th>
                                        <th >Jadwal</th>

                                    </tr>
                                </thead>
                                <tbody >
                                        <tr>
                                        @foreach($absensis as $absensi)
                                            <td>{{ $absensi->employes->general_firstname }}</td>
                                            <td>{{ $absensi->tanggal }}</td>
                                            <td>{{ $absensi->shifts->start_time }}</td>
                                            <td>{{ $absensi->shifts->end_time }}</td>
                                            <td>{{ $absensi->shifts->data_type }}</td>
                                            <td>{{ $absensi->shifts->flexible_time }}</td>
                                            <td>{{ $absensi->shifts->end_time }}</td>
                                            <td></td>
                                            <td></td>

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