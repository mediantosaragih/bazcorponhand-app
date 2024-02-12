@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Shift Daily</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Shift Daily</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Shift</h4>
            </div>
            <div class="card-body">
            @foreach($data_shifts as $shift)
                <form action="{{ route('admin.shift.update', ['id' => $shift->id]) }}" method="post">
                @csrf
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-form-label form-label">Shift Daily Code</label>
                                <input  name="shift_code" value="{{$shift->shift_code}}" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label form-label">Nama Shift</label>
                                <input  name="nama_shift" value="{{$shift->nama_shift}}" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-3">
                                <label class="col-form-label form-label">Start Time</label>
                                <input  name="start_time" value="{{$shift->start_time}}" type="time" class="form-control" required>
                            </div>
                            <div class="col-md-3">
                                <label class="col-form-label form-label">End Time</label>
                                <input  name="end_time" value="{{$shift->end_time}}" type="time" class="form-control" required>
                            </div>
                            <div class="col-md-12   ">
                                <label></label>
                                <div class="" style="d-flex justify-content-center align-items-center text-align:center">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>   
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </section>
</div>

@stop