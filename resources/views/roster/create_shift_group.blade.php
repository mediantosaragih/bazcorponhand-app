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
                <form action="{{ route('admin.shift_group.store') }}" method="post">
                @csrf
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Tambah Shift Group</label>
                            </div>
                            <div class="col-md-3">
                                <label class="col-form-label form-label">Group Code</label>
                                <input  name="group_code" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-5">
                                <label class="col-form-label form-label">Group Name</label>
                                <input  name="group_name" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-5">
                                <label class="col-form-label form-label">Calculate after productive minutes fulfilled</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label form-label">Total Days</label>
                                <input id="overtime_based_on" name="overtime_based_on" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-3 mt-3">
                                <label></label>
                                <div class="" style="d-flex justify-content-center align-items-center text-align:center">
                                    <button type="button" onclick="generateTable()" class="btn btn-success">Generate Table</button>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <table id="resultTable" class="table">
                                    <!-- Table content will be generated here -->
                                </table>
                            </div> 
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

@push('scripts')
<script>

function generateTable() {
        var totalDays = document.getElementById('overtime_based_on').value;
        var table = document.getElementById('resultTable');

        // Clear previous table content
        table.innerHTML = '';

        // Create table header
        var headerRow = table.insertRow(0);
        var headerCell1 = headerRow.insertCell(0);
        headerCell1.innerHTML = '<strong>Day</strong>';
        var headerCell2 = headerRow.insertCell(1);
        headerCell2.innerHTML = '<strong>Shift Code</strong>';
        var headerCell3 = headerRow.insertCell(2);
        headerCell3.innerHTML = '<strong>Shift Description</strong>';

        // Create table rows
        for (var i = 1; i <= totalDays; i++) {
            var row = table.insertRow(i);

            // Cell 1 - Day Number
            var cell1 = row.insertCell(0);
            cell1.innerHTML = i;

            // Cell 2 - Shift Code (dropdown)
            var cell2 = row.insertCell(1);
            var dropdown = document.createElement("select");

            // Buat beberapa opsi dropdown (ganti ini sesuai kebutuhan)
            var option1 = document.createElement("option");
            option1.text = "SHIFT_PAGI";
            dropdown.add(option1);

            var option2 = document.createElement("option");
            option2.text = "SHIFT_SIANG";
            dropdown.add(option2);

            var option3 = document.createElement("option");
            option3.text = "SHIFT_MALAM";
            dropdown.add(option3);

            // Set nilai awal dropdown (opsional)
            dropdown.value = "SHIFT_PAGI";

            // Tambahkan event listener untuk menangani perubahan pada dropdown
            dropdown.addEventListener('change', function () {
                // Pemeriksaan nilai dropdown untuk menentukan nilai kolom "Shift Description"
                var selectedOption = this.value;
                var rowIndex = this.parentNode.parentNode.rowIndex; // Dapatkan indeks baris
                var shiftDescriptionCell = table.rows[rowIndex].cells[2];

                // Sesuaikan nilai kolom "Shift Description" berdasarkan opsi yang dipilih
                if (selectedOption === "SHIFT_PAGI") {
                    shiftDescriptionCell.innerHTML = 'Start-End: 08:00 - 17:00';
                } else if (selectedOption === "SHIFT_SIANG") {
                    shiftDescriptionCell.innerHTML = 'Start-End: 17:00 - 00:00';
                } else if (selectedOption === "SHIFT_MALAM") {
                    shiftDescriptionCell.innerHTML = 'Start-End: 00:00 - 08:00';
                }
            });

            // Tambahkan dropdown ke dalam sel
            cell2.appendChild(dropdown);

            // Cell 3 - Shift Description (placeholder)
            var cell3 = row.insertCell(2);
            cell3.innerHTML = 'Start-End: 08:00 - 17:00';
        }
    }

    document.querySelector('form').addEventListener('submit', function (event) {
            if (document.getElementById('resultTable').rows.length <= 1) {
                event.preventDefault();
                alert('Generate the table before submitting the form.');
            }
        });
</script>
@endpush
@stop