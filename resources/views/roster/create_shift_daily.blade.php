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
                <h4 class="card-title">Shift Daily</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                @csrf
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Tambah Shift Daily</label>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Shift Daily Code</label>
                                <input  name="" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Day Type</label>
                                <input  name="" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Shift Daily Code PH</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio1">
                                    <label class="form-check-label">Off Day</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio1">
                                    <label class="form-check-label">Flexible Work Day</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio1">
                                    <label class="form-check-label">No Changed</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Flexible Shift</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Start Time</label>
                                <input  name="" type="date" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">End Time</label>
                                <input  name="" type="date" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Grace for Late</label>
                                <div class="input-group">
                                    <input  name="" type="number" class="form-control" required>
                                        <div class="input-group-append"> 
                                            <span class="input-group-text">Minute(s)</span>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Productive Work Time</label>
                                <div class="input-group"> 
                                    <input  name="" type="number" class="form-control" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Minute(s)</span>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-md-8">
                                <label for="exampleInputFile">File Input Excel</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
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