@extends('layout.main')

@section('title', 'Lembur')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Overtime</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Overtime</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">

<div class="container-fluid px-4">
    <h2 class="mt-4">Overtime</h2>
    <div class="card shadow mb-4">
        
        <div class="card shadow mb-4">
            <div class="card-header mb-2">
                <div class="">
                    <a href="{{ route('admin.overtime.create') }}" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example1" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Karyawan</th>
                                <th>Tanggal Lembur</th>
                                <th>Mulai Lembur</th>
                                <th>Berakhir Lembur</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_overtime as $overtime)
                                <tr style="">
                                    <td>{{$loop->iteration}}</td>
                                    <td style="">
                                        <span class="js-lists-values-nama">{{$overtime->overtime_id_karyawan}}</span>
                                    </td>
                                    <td style="">
                                        <span class="js-lists-values-nama">{{$overtime->overtime_tanggal}}</span>
                                    </td>
                                    <td style="">
                                        <span class="js-lists-values-nama">{{$overtime->overtime_mulai}}</span>
                                    </td>
                                    <td style="">
                                        <span class="js-lists-values-nama">{{$overtime->overtime_berakhir}}</span>
                                    </td>
                                    <td style="width: 10px;" align="center" >
                                        <a href="{{ route('admin.overtime.edit', ['overtime_id_karyawan' => $overtime->overtime_id_karyawan]) }}">
                                        <span class="icon">
                                            <i class="fas fa-pencil-alt"></i> <!-- Icon pensil (pencil) -->
                                        </span>
                                        </a>
                                        <a href="{{ route('admin.overtime.delete', ['overtime_id_karyawan' => $overtime->overtime_id_karyawan]) }}">
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
    @push('scripts_bottom')
        <script>
      function confirmDelete(url) {
            if (confirm('Are you sure you want to delete this item?')) {
                window.location.href = url;
            }
        }
        </script>
    @endpush
@stop   