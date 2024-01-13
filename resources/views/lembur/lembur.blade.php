@extends('layout.main')

@section('title', 'Lembur')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">lembur</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">lembur</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">

<div class="container-fluid px-4">
    <h2 class="mt-4">lembur</h2>
    <div class="card shadow mb-4">
        
        <div class="card shadow mb-4">
            <div class="card-header mb-2">
                <div class="">
                    <a href="{{ route('admin.lembur.create') }}" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example1" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jumlah Waktu Lembur</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data_lembur as $lembur)
                            <tr style="">
                                <td>{{$loop->iteration}}</td>
                                    <td style="">
                                        <span class="js-lists-values-nama">{{$lembur->name}}</span>
                                    </td>
                                    <td style="">
                                        <span class="js-lists-values-email">{{$lembur->jumlah_jam_lembur}}</span>
                                    </td>
                                    <td style="">
                                        <span class="js-lists-values-email">{{$lembur->harga_lembur}}</span>
                                    </td>
                                    <td>
                                    <a href="{{ route('admin.lembur.edit', $lembur->id) }}"><i class="fas fa-pen"></i></a>
                                    <!-- <a href="{{ route('admin.user.edit',['id' => $lembur->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i> Edit</a> -->
                                    <a data-toggle="modal" data-target="#modal-hapus{{ $lembur->id }}"><i class="fas fa-trash-alt"></i> </a>
                                </td>
                                </tr>
                                <div class="modal fade" id="modal-hapus{{ $lembur->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah kamu yakin ingin menghapus data user <b>{{ $lembur->name }}</b></p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <form action="{{ route('admin.lembur.delete',['id' => $lembur->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Ya, Hapus</button>
                                        </form>
                                    </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
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