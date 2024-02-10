@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Cuti</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Cuti</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Cuti</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                @csrf
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Tambah Cuti</label>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Leave Code</label>
                                <input  name="shift_daily_code" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Leave Name</label>
                                <input  name="day_type" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Eligibility Leave</label>
                                <input  name="day_type" type="text" class="form-control" required>
                            </div>
                            
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Limit Date</label>
                                <div class="form-check">
                                    <input name="flexible_shift" type="checkbox" class="form-check-input" id="exampleCheck1" value="Yes">
                                    <label class="form-check-label" for="exampleCheck1">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shift_daily_code_ph" value="Off Day">
                                    <label class="form-check-label">Use Default from company parameter setting</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shift_daily_code_ph" value="Off Day">
                                    <label class="form-check-label">Use Specific Date</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Deducated Leave</label>
                                <div class="form-check">
                                    <input name="flexible_shift" type="checkbox" class="form-check-input" id="exampleCheck1" value="Yes">
                                    <label class="form-check-label" for="exampleCheck1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Day Count</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shift_daily_code_ph" value="Off Day">
                                    <label class="form-check-label">Work Day</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shift_daily_code_ph" value="Off Day">
                                    <label class="form-check-label">Calendar Day</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Leave Day Type</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shift_daily_code_ph" value="Off Day">
                                    <label class="form-check-label">Full Day</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shift_daily_code_ph" value="Off Day">
                                    <label class="form-check-label">Part of Day</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shift_daily_code_ph" value="Off Day">
                                    <label class="form-check-label">Half Day</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Validate Against other attendance status</label>
                                <div class="form-check">
                                    <input name="flexible_shift" type="checkbox" class="form-check-input" id="exampleCheck1" value="Yes">
                                    <label class="form-check-label" for="exampleCheck1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Once in employment period</label>
                                <div class="form-check">
                                    <input name="flexible_shift" type="checkbox" class="form-check-input" id="exampleCheck1" value="Yes">
                                    <label class="form-check-label" for="exampleCheck1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Once in balance period</label>
                                <div class="form-check">
                                    <input name="flexible_shift" type="checkbox" class="form-check-input" id="exampleCheck1" value="Yes">
                                    <label class="form-check-label" for="exampleCheck1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <label for="">Shift </label>
                                <select name="shift_id" class="form-control" required>
                                    <option value="">Join Date</option>
                                    <option value="">Join Date</option>
                                    <option value="">Join Date</option>
                                </select>
                            </div>
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