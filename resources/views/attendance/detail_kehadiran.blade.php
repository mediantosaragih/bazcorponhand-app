@extends('layout.main')

@section('title', 'Employe')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kehadiran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Kehadiran</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="container-fluid px-4">
                <div class="card shadow mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header mb-2">
                            <a>Data Kehadiran</a> - 
                                @foreach($absensis as $absensi)
                                <label>{{ $absensi->employes->general_firstname . ' ' . $absensi->employes->general_lastname }}</label>
                                    @break
                                @endforeach
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="example1" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">Tanggal</th>
                                            <th colspan="7">Masuk</th>
                                            <th colspan="3">Keluar</th>
                                            <th rowspan="2">Kompensasi</th>
                                            <th rowspan="2">Ket</th>
                                            <th rowspan="2">Action</th>
                                        </tr>
                                        <tr>
                                            <th >Jadwal</th>
                                            <th >Check in</th>
                                            <th >Lokasi Absensi</th>
                                            <th >Lokasi Kode</th>
                                            <th >Lokasi Nama</th>
                                            <th >Lokasi Kordinat</th>
                                            <th >Status</th>
                                            <th >Jadwal</th>
                                            <th >Check out</th>
                                            <th >Ovt</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                            <tr>
                                            @foreach($absensis as $absensi)
                                                <td>{{ $absensi->tanggal }}</td>
                                                <td>{{ $absensi->shifts->start_time }}</td>
                                                <td>{{ $absensi->check_in }}</td>
                                                <td>{{ $absensi->lokasi_absensi }}</td>
                                                <td>{{ $absensi->lokasi_code }}</td>
                                                <td>{{ $absensi->lokasi_nama }}</td>
                                                <td>{{ $absensi->lokasi_kordinat }}</td>
                                                <td>telat</td>
                                                <td>{{ $absensi->shifts->end_time }}</td>
                                                <td>{{ $absensi->check_out }}</td>
                                                <td>ovt</td>
                                                <td>3 menit</td>
                                                <td>keterangan</td>

                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@push('scripts')
<script>
        // Function to get the last day of the month
        function getLastDayOfMonth(year, month) {
            return new Date(year, month + 1, 0).getDate();
        }

        // Get the current date
        const currentDate = new Date();

        // Get the first day of the current month
        const firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);

        // Get the last day of the current month
        const lastDayOfMonth = getLastDayOfMonth(currentDate.getFullYear(), currentDate.getMonth());

        // Reference to the table body
        const tableBody = document.getElementById("tableBody");

        // Loop through each day and generate a table row
        for (let day = 1; day <= lastDayOfMonth; day++) {
            // Create a table row
            const row = document.createElement("tr");

            // Add the date cell
            const dateCell = document.createElement("td");
            const formattedDate = `${day}-${currentDate.getMonth() + 1}-${currentDate.getFullYear()}`;
            dateCell.textContent = formattedDate;
            row.appendChild(dateCell);

            // Add Masuk cells
            for (let i = 0; i < 3; i++) {
                const masukCell = document.createElement("td");
                masukCell.textContent = "Sample Masuk";
                row.appendChild(masukCell);
            }

            // Add Keluar cells
            for (let i = 0; i < 3; i++) {
                const keluarCell = document.createElement("td");
                keluarCell.textContent = "Sample Keluar";
                row.appendChild(keluarCell);
            }

            // Add Jadwal cell
            const jadwalCell = document.createElement("td");
            jadwalCell.textContent = "Sample Jadwal";
            row.appendChild(jadwalCell);

            // Add Ket cell
            const ketCell = document.createElement("td");
            ketCell.textContent = "Sample Ket";
            row.appendChild(ketCell);

            // Add Action cell
            const actionCell = document.createElement("td");
            actionCell.innerHTML = `
                <a href="">
                    <span class="icon">
                        <i class="fas fa-pencil-alt"></i>
                    </span>
                </a>
                <a href="">
                    <span class="icon">
                        <i class="fas fa-trash-alt"></i>
                    </span>
                </a>`;
            row.appendChild(actionCell);

            // Append the row to the table body
            tableBody.appendChild(row);
        }
    </script>
@endpush
@stop
