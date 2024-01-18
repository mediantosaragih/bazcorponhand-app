@extends('layout.main')

@section('title', 'Employe')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Employee</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Employee</li>
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
                        <div class="row">
                            <div class="col-md-3">
                            <a href="{{ route('admin.employe.create') }}" class="btn btn-success">Tambah Data</a>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#importModal">Import Data</button>
                                
                                <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="importModalLabel">Import Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('admin.employe.import-proses') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="fileInput">Pilih File</label>
                                                        <input type="file" class="form-control" id="fileInput" name="file">
                                                        @error('file')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NO ID KARYAWAN</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Mobile Number</th>
                                        <th>Departemen</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data_karyawan as $karyawan)
                                    <tr style="">
                                        <td>{{$loop->iteration}}</td>
                                            <td>
                                                <span class="js-lists-values-general-karyawan-id">{{$karyawan->general_karyawan_id}}</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-nama">{{$karyawan->general_firstname}}</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-email">{{$karyawan->general_email}}</span>
                                            </td>
                                            <td>
                                                <span class="js-lists-values-no-hp">{{$karyawan->general_no_hp}}</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-department">{{$karyawan->general_department}}</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-jabatan">{{$karyawan->general_riwayat_jabatan}}</span>
                                            </td>
                                            <td style="width: 10px;" align="center" >
                                                <a href="{{ route('admin.employe.edit', ['general_karyawan_id' => $karyawan->general_karyawan_id]) }}">
                                                <span class="icon">
                                                    <i class="fas fa-pencil-alt"></i> <!-- Icon pensil (pencil) -->
                                                </span>
                                                </a>
                                                <a href="{{ route('admin.employe.destroy', ['general_karyawan_id' => $karyawan->general_karyawan_id]) }}">
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