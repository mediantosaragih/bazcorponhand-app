@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Overtime</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Overtime</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Overtime</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.overtime.store') }}" method="post">
                @csrf
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Tambah Overtime</label>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">ID Karyawan</label>
                                <select name="overtime_id_karyawan" class="form-control" required>
                                @foreach ($employes as $employe)
                                    <option value="{{ $employe->general_karyawan_id }}">{{ $employe->general_karyawan_id }} - {{ $employe->general_firstname }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Tanggal Lembur</label>
                                <input  name="overtime_tanggal" type="date" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Mulai Lembur</label>
                                <input  name="overtime_mulai" type="time" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Berakhir Lembur</label>
                                <input  name="overtime_berakhir" type="time" class="form-control" required>
                            </div><br>
                            <div class="col-md-8">
                                <label></label>
                                <div class="" style="d-flex justify-content-center align-items-center text-align:center">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>   
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

@stop