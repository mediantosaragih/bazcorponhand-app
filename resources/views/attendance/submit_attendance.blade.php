@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Submit Attendance</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Submit Attendance</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Aabsen Masuk</h3>
                        </div>
                        <form method="POST" action="{{route('submit-attendance-post')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h5>Selamat Pagi <strong>{{ auth()->user()->name }}</strong>, kamu hari ini masuk shift pagi dari jam 08.00 sampai jam 16.00 ya. Sebaiknya jangan terlambat untuk melakukan absensi :)</h5>
                                <div class="form-group">
                                  <label>Lokasi Absen</label>
                                  <select class="form-control" name="location">
                                    @foreach ($attendanceLocations as $attendanceLocation)
                                        <option value="{{$attendanceLocation->id}}">{{$attendanceLocation->location_name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label>Foto Selfie</label>
                                    <button type="button" data-toggle="modal" data-target="#modal-lg" class="btn btn-default btn-sm mx-1">
                                        <i class="fa fa-camera"></i>
                                    </button>
                                    <input type="hidden" name="selfie" class="image-tag">
                                    <div id="results"></div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe id="map" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-122.4194%2C37.7749%2C-122.4090%2C37.7843&layer=mapnik"></iframe>
                </div>
            </div>
            <div class="modal fade" id="modal-lg" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <form method="POST" action="http://127.0.0.1:8000/admin/time-and-attendance/add-leave-setting">
                            <input type="hidden" name="_token" value="fMNAZ9rQ7IW8hXCKok4BfvQ7jlvtuFcELqkVoIqN" autocomplete="off">                        <div class="modal-header">
                                <h4 class="modal-title">Ambil Foto Selfie</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">x</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="my_camera" style="width: 100%; backgroud:blue;"></div>
                                <br/>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <input type=button  class="btn btn-default" data-dismiss="modal" value="Capture" onClick="take_snapshot()">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <script language="JavaScript">
        Webcam.set({
            width: 470,
            height: 350,
            image_format: 'jpeg',
            jpeg_quality: 90
        });

        Webcam.attach( '#my_camera' );

        function take_snapshot() {
            Webcam.snap( function(data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
                document.getElementById('selfie').value = data_uri;
            } );
            Webcam.detach( '#my_camera');
        }
    </script>
@endsection
