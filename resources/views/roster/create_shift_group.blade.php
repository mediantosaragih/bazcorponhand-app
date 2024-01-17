@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Shift Group</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Shift Group</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Shift Group</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                @csrf
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Tambah Shift Group</label>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Group Code</label>
                                <input  name="" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Group Name</label>
                                <input  name="" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Overtime Based On</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Request And Attendance</option>
                                    <option>Request And Attendance 2</option>
                                    <option>Request And Attendance 3</option>
                                    <option>Request And Attendance 4</option>
                                    <option>Request And Attendance 5</option>
                                    <option>Request And Attendance 6</option>
                                    <option>Request And Attendance 7</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Calculate after productive minutes fulfilled</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Total Days</label>
                                <input  name="" type="number" class="form-control" required>
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