@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Shift Daily</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Shift Daily</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Shift Daily</h4>
            </div>
            <div class="card-body">
            @foreach($detail_shift_daily as $detail_shift_daily)
                <form action="{{ route('admin.shift_daily.update', ['shift_daily_code' => $detail_shift_daily->shift_daily_code]) }}" method="post">
                @csrf
                @method('PUT')
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Edit Shift Daily</label>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Shift Daily Code</label>
                                <input  name="shift_daily_code" value="{{$detail_shift_daily->shift_daily_code}}" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Day Type</label>
                                <input  name="day_type" value="{{$detail_shift_daily->day_type}}" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Shift Daily Code PH</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Off Day" name="shift_daily_code_ph">
                                    <label class="form-check-label">Off Day</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Flexible Work Day" name="shift_daily_code_ph">
                                    <label class="form-check-label">Flexible Work Day</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="No Changed" name="shift_daily_code_ph">
                                    <label class="form-check-label">No Changed</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Flexible Shift</label>
                                <div class="form-check">
                                    <input name="flexible_shift" value="Yes" type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Start Time</label>
                                <input  name="start_time" value="{{$detail_shift_daily->start_time}}" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">End Time</label>
                                <input  name="end_time" value="{{$detail_shift_daily->end_time}}" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Grace for Late</label>
                                <div class="input-group">
                                    <input  name="grace_for_late" value="{{$detail_shift_daily->grace_for_late}}" type="number" class="form-control" required>
                                        <div class="input-group-append"> 
                                            <span class="input-group-text">Minute(s)</span>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Productive Work Time</label>
                                <div class="input-group"> 
                                    <input  name="productive_work_time" value="{{$detail_shift_daily->productive_work_time}}" type="number" class="form-control" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Minute(s)</span>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Break Time</label>
                                <input  name="break_time" value="{{$detail_shift_daily->break_time}}" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Remark</label>
                                <input  name="remark" value="{{$detail_shift_daily->remark}}" type="text" class="form-control" required>
                            </div>
                            <!-- <div class="col-md-8">
                                <label for="exampleInputFile">File Input Excel</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div><br> -->
                            <div class="col-md-8">
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