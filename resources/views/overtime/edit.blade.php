@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Overtime</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Overtime</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                
            @foreach($data_overtime as $data_overtime)
                <form action="{{ route('admin.overtime.update', ['overtime_id_karyawan' => $data_overtime->overtime_id_karyawan]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Edit Overtime</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                    <div class="container-fluid px-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Detail Overtime</label>
                                            </div>
                                            <div class="col-md-8">
                                                <label class="col-form-label form-label">ID karyawan</label>
                                                <select name="overtime_id_karyawan" class="form-control" required>
                                                @foreach ($employes as $employe)
                                                    <option value="{{ $employe->general_karyawan_id }}">{{ $employe->general_karyawan_id }} - {{ $employe->general_firstname }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-8">
                                                <label class="col-form-label form-label">Tanggal Lembur</label>
                                                <input  name="overtime_tanggal" value="{{$data_overtime->overtime_tanggal}}" type="date" class="form-control" required>
                                            </div>
                                            <div class="col-md-8">
                                                <label class="col-form-label form-label">Mulai Lembur</label>
                                                <input  name="overtime_mulai" value="{{$data_overtime->overtime_mulai}}" type="time" class="form-control" required>
                                            </div>
                                            <div class="col-md-8">
                                                <label class="col-form-label form-label">Berakhir Lembur</label>
                                                <input  name="overtime_berakhir" value="{{$data_overtime->overtime_berakhir}}" type="time" class="form-control" required>
                                            </div><br>
                                            <div class="col-md-8">
                                                <label></label>
                                                <div class="" style="d-flex justify-content-center align-items-center text-align:center">
                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                    </div>       
                                </form>
                                
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                    </div>
                </form>
            @endforeach
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
