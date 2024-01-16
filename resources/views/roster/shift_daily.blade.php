@extends('layout.main')

@section('title', 'Employe')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Shift Daily</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Shift Daily</li>
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
                        <a href="{{route('admin.shift_daily.create')}}" class="btn btn-success">Tambah Shift Daily</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>EmpNo</th>
                                        <th>21 July 2023</th>
                                        <th>22 July 2023</th>
                                        <th>23 July 2023</th>
                                        <th>24 July 2023</th>
                                        <th>25 July 2023</th>
                                        <th>26 July 2023</th>
                                        <th>27 July 2023</th>
                                        <th>28 July 2023</th>
                                        <th>29 July 2023</th>
                                        <th>30 July 2023</th>
                                        <th>31 July 2023</th>
                                        <th>1 Agustus 2023</th>
                                        <th>2 Agustus 2023</th>
                                        <th>3 Agustus 2023</th>
                                        <th>4 Agustus 2023</th>
                                        <th>5 Agustus 2023</th>
                                        <th>6 Agustus 2023</th>
                                        <th>7 Agustus 2023</th>
                                        <th>8 Agustus 2023</th>
                                        <th>9 Agustus 2023</th>
                                        <th>10 Agustus 2023</th>
                                        <th>11 Agustus 2023</th>
                                        <th>12 Agustus 2023</th>
                                        <th>13 Agustus 2023</th>
                                        <th>14 Agustus 2023</th>
                                        <th>15 Agustus 2023</th>
                                        <th>16 Agustus 2023</th>
                                        <th>17 Agustus 2023</th>
                                        <th>18 Agustus 2023</th>
                                        <th>19 Agustus 2023</th>
                                        <th>20 Agustus 2023</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Agus Maulana</td>
                                        <td>2253</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Didik Maryanto</td>
                                        <td>2254</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Acep Dani Wildanur</td>
                                        <td>2255</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Ade Afrizal</td>
                                        <td>2256</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Harnadi</td>
                                        <td>2257</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_SIANG</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>SECURITY_1_MALAM</td>
                                        <td>OFF</td>
                                        <td>OFF</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_PAGI</td>
                                        <td>SECURITY_1_SIANG</td>
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