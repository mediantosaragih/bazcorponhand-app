@extends('layout.main')

@section('title', 'Employe')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kehadiran Hari Ini</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Kehadiran Hari Ini</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <div class="row">
            <div class="container-fluid px-4">
                <div class="card shadow mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header mb-2">
                            <a>Data Kehadiran Hari Ini</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example1" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">No ID Karyawan</th>
                                            <th rowspan="2">Nama</th>
                                            <th rowspan="2">Tanggal</th>
                                            <th colspan="7">Masuk</th>
                                            <th colspan="3">Keluar</th>
                                            <th rowspan="2">Kompensasi</th>
                                            <th rowspan="2">Ket</th>
                                        </tr>
                                        <tr>
                                            <th >Jadwal</th>
                                            <th >Check in</th>
                                            <th >Lokasi Absensi</th>
                                            <th >Lokasi Kode</th>
                                            <th >Lokasi Nama</th>
                                            <th >Lokasi Kordinat</th>
                                            <th >Status</th>
                                            <th >Jadwal</th>
                                            <th >Check out</th>
                                            <th >Ovt</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                            <tr>
                                                <td>1</td>
                                                <td>M_1</td>
                                                <td>Medi</td>
                                                <td>2024-01-01</td>
                                                <td>07:00:00</td>
                                                <td>2024-01-28 16:18:09</td>
                                                <td>Unnamed Location</td>
                                                <td>001</td>
                                                <td>Location A</td>
                                                <td>0.000000,0.000000</td>
                                                <td>telat</td>
                                                <td>15:00:00</td>
                                                <td>2024-01-28 16:18:09</td>
                                                <td>ovt</td>
                                                <td>3 menit</td>
                                                <td>keterangan</td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop