@extends('layout.main')

@section('title', 'Sallary')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
<div class="container-fluid px-4">
    <h2 class="mt-4">Sallary</h2>
    <div class="card shadow mb-4">
        
        <div class="card shadow mb-4">
            <div class="card-header mb-2">
                <i class="fas fa-table me-1"></i>
                    DataTable Example
                <div class="">
                    <a href="{{ route('admin.gaji.create') }}" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Karyawan</th>
                                <th>Departemen</th>
                                <th>Jenis Slip Gaji</th>
                                <th>Gaji Pokok</th>
                                <th>Net Sallary</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                       
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