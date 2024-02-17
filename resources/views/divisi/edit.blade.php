@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Divisi</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Divisi</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                
            @foreach($detail_divisi as $detail_divisi)
                <form action="{{ route('admin.divisi.update', ['divisi_id' => $detail_divisi->divisi_id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Edit Karyawan</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                    <div class="container-fluid px-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Detail Divisi</label>
                                            </div>
                                            <div class="col-md-8">
                                                <label class="col-form-label form-label">ID DIVISI</label>
                                                <input  name="divisi_id" value="{{$detail_divisi->divisi_id}}" type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-8">
                                                <label class="col-form-label form-label">NAMA DIVISI</label>
                                                <input  name="name_divisi" value="{{$detail_divisi->name_divisi}}" type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-8">
                                                <label class="col-form-label form-label">JUMLAH DIVISI</label>
                                                <input  name="jumlah" value="{{$detail_divisi->jumlah}}" type="text" class="form-control" required>
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
