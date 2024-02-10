@extends('layout.main')

@section('title', 'Cuti')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Cuti</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Cuti</li>
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
                        <div class="">
                        <a href="{{route('admin.cuti.create')}}" class="btn btn-success">Tambah Cuti</a>
                        <a href="{{route('admin.cuti_massal.create')}}" class="btn btn-success">Tambah Cuti Massal </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>                                  
                                        <th>No</th>
                                        <th>Leave Code</th>
                                        <th>Leave Name</th>
                                        <th>Eligibility Leave</th>
                                        <th>Day Type</th>
                                        <th>Deducted Leave</th>
                                        <th>Day Count</th>
                                        <th>Repeat Period</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td style="">
                                            <span class="js-lists-values-nama"></span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-nama"></span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-nama"></span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-nama"></span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-nama"></span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-nama"></span>
                                        </td>
                                        <td style="">
                                            <span class="js-lists-values-nama"></span>
                                        </td>
                                        <td style="width: 10px;" align="center" >
                                        <a href="">
                                            <span class="icon">
                                                <i class="fas fa-pencil-alt"></i> <!-- Icon pensil (pencil) -->
                                            </span>
                                            </a>
                                            <a href="">
                                                <span class="icon">
                                                    <i class="fas fa-trash-alt"></i> <!-- Icon tong sampah (trash) -->
                                                </span>
                                            </a>
                                        </td>
                                    </tr>

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