@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <!-- ... (previous content) ... -->
    </div>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ isset($data_lembur) ? 'Edit' : 'Tambah' }} Lembur</h4>
            </div>
            <div class="card-body">
                <form action="{{ isset($data_lembur) ? route('admin.lembur.update', $data_lembur->id) : route('admin.lembur.store') }}" method="POST">
                    @csrf
                    @if(isset($data_lembur))
                        @method('PUT')
                    @endif

                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-md-8">
                                <label class="col-form-label form-label">NAMA </label>
                                <input name="name" type="text" class="form-control" value="{{ isset($data_lembur) ? $data_lembur->name : old('name') }}" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Jumlah Waktu Lembur</label>
                                <input name="jumlah_jam_lembur" type="text" class="form-control" value="{{ isset($data_lembur) ? $data_lembur->jumlah_jam_lembur : old('jumlah_jam_lembur') }}" required>
                            </div>
                            <div class="col-md-8">
                                <label class="col-form-label form-label">Harga Lembur</label>
                                <input name="harga_lembur" type="text" class="form-control" value="{{ isset($data_lembur) ? $data_lembur->harga_lembur : old('harga_lembur') }}" required>
                            </div>
                            <div class="col-md-8 mt-3">
                                <div class="d-flex justify-content-center align-items-center text-align:center">
                                    <button type="submit" class="btn btn-success">{{ isset($data_lembur) ? 'Update' : 'Simpan' }} Lembur</button>
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
