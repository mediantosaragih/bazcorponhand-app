@extends('layouts.main')

@section('title', 'Detail Karyawan')

@section('content')

<div class="row">
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Karyawan</h4>
                    </div>
                    @foreach($detail_karyawan as $detail_karyawan)
                    <div class="card-body">
                        <form action="{{ route('PostEditDataKaryawan') }}" method="post">
                        @csrf
                        <div class="container-fluid px-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Informasi Umum</label>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">NO ID KARYAWAN</label>
                                    <input  name="general_karyawan_id" value="{{$detail_karyawan->general_karyawan_id}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">NO KARTU AKSES KARYAWAN</label>
                                    <input  name="general_nomor_kartu_akses" value="{{$detail_karyawan->general_nomor_kartu_akses}}" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">FIRST NAME</label>
                                    <input  name="general_firstname" value="{{$detail_karyawan->general_firstname}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">LAST NAME</label>
                                    <input  name="general_lastname" value="{{$detail_karyawan->general_lastname}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">NICK NAME</label>
                                    <input  name="general_nickname" value="{{$detail_karyawan->general_nickname}}" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">NIK</label>
                                    <input  name="general_nik" value="{{$detail_karyawan->general_nik}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="col-form-label form-label">TEMPAT LAHIR</label>
                                    <input  name="general_tempat_lahir" value="{{$detail_karyawan->general_tempat_lahir}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="col-form-label form-label">TANGGAL LAHIR</label>
                                    <input  name="general_tanggal_lahir" value="{{$detail_karyawan->general_tanggal_lahir}}" type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">JENIS KELAMIN</label>
                                    <!-- <input  name="general_karyawan_id" type="text" class="form-control" required> -->
                                    <select class="form-control" name="general_jenis_kelamin" value="{{$detail_karyawan->general_jenis_kelamin}}" required="">
                                        <!-- <option style="background : greenyellow;" value=""></option> -->
                                        <option selected value="{{$detail_karyawan->general_jenis_kelamin}}" hidden>{{$detail_karyawan->general_jenis_kelamin}}</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">STATUS PERKAWINAN</label>
                                    <!-- <input  name="general_tanggal_lahir" type="date" class="form-control" required> -->
                                    <select class="form-control" name="general_status_perkawinan" value="{{$detail_karyawan->general_status_perkawinan}}" required="">
                                        <!-- <option style="background : greenyellow;" value=""></option> -->
                                        <option selected value="{{$detail_karyawan->general_status_perkawinan}}" hidden>{{$detail_karyawan->general_status_perkawinan}}</option>
                                        <option value="Belum">Belum Kawin</option>
                                        <option value="Sudah">Sudah Kawin</option>
                                        <option value="Cerai">Cerai</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">AGAMA</label>
                                    <!-- <input  name="general_tanggal_lahir" type="date" class="form-control" required> -->
                                    <select class="form-control" name="general_agama" value="{{$detail_karyawan->general_agama}}" required="">
                                        <!-- <option style="background : greenyellow;" value=""></option> -->
                                        <option selected value="{{$detail_karyawan->general_agama}}" hidden>{{$detail_karyawan->general_agama}}</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Informasi Personal</label>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">TINGGI BADAN</label>
                                    <div class="input-group">
                                        <input  name="general_tinggi_badan" value="{{$detail_karyawan->general_tinggi_badan}}" type="number" class="form-control" required>
                                        <div class="input-group-append"> 
                                            <span class="input-group-text">CM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">BERAT BADAN</label>
                                    <div class="input-group"> 
                                        <input  name="genaral_berat_badan" value="{{$detail_karyawan->genaral_berat_badan}}" type="number" class="form-control" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">KG</span>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">GOLONGAN DARAH</label>
                                    <input  name="general_golongan_darah" value="{{$detail_karyawan->general_golongan_darah}}" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">ALAMAT SESUAI KTP</label>
                                    <input  name="general_alamat_ktp" value="{{$detail_karyawan->general_alamat_ktp}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">ALAMAT DOMISILI</label>
                                    <input  name="general_alamat_domisili" value="{{$detail_karyawan->general_alamat_domisili}}" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">NPWP</label>
                                    <input  name="general_npwp" type="text" value="{{$detail_karyawan->general_npwp}}" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">NO BPJS KETENAGAKERJAAN</label>
                                    <input  name="general_bpjs_ketenagakerjaan" value="{{$detail_karyawan->general_bpjs_ketenagakerjaan}}" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">NO BPJS KESEHATAN</label>
                                    <input  name="general_bpjs_kesehatan" value="{{$detail_karyawan->general_bpjs_kesehatan}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">NO REKENING</label>
                                    <input  name="general_no_rek" value="{{$detail_karyawan->general_no_rek}}" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">MOBILE NUMBER</label>
                                    <input  name="general_no_hp" value="{{$detail_karyawan->general_no_hp}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">EMAIL</label>
                                    <input  name="general_email" value="{{$detail_karyawan->general_email}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">MEDIA SOSIAL</label>
                                    <input  name="general_medsos" value="{{$detail_karyawan->general_medsos}}" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">UKURAN BAJU</label>
                                    <input  name="general_ukuran_baju" value="{{$detail_karyawan->general_ukuran_baju}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">UKURAN CELANA</label>
                                    <input  name="general_ukuran_celana" value="{{$detail_karyawan->general_ukuran_celana}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">UKURAN SEPATU</label>
                                    <input  name="general_ukuran_sepatu" value="{{$detail_karyawan->general_ukuran_sepatu}}" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="col-form-label form-label">BAHASA YANG DIKUASAI</label>
                                    <input  name="general_bahasa" value="{{$detail_karyawan->general_bahasa}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="col-form-label form-label">PENDIDIKAN TERAKHIR</label>
                                    <select class="form-control" name="general_pendidikan_a" value="{{$detail_karyawan->general_pendidikan_a}}" required="">
                                        <option selected value="{{$detail_karyawan->general_pendidikan_a}}" hidden>{{$detail_karyawan->general_pendidikan_a}}</option>
                                        <option value="0">Belum Tersedia</option>
                                        <option value="SD">SD atau sederajat</option>
                                        <option value="SMP">SMP atau sederajat</option>
                                        <option value="SMA">SMA/SMK atau sederajat</option>
                                        <option value="D3">D3 (Ahli Madya)</option>
                                        <option value="D4">D4 (Sarjana Terapan)</option>
                                        <option value="S1">S1 (Sarjana)</option>
                                        <option value="S2">S2 (Magister)</option>
                                        <option value="S3">S3 (Doktor)</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="col-form-label form-label">PROGRAM STUDI</label>
                                    <input  name="general_pendidikan_b" value="{{$detail_karyawan->general_pendidikan_b}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="col-form-label form-label">KETERAMPILAN KHUSUS</label>
                                    <input  name="general_keterampilan" value="{{$detail_karyawan->general_keterampilan}}" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">TIPE</label>
                                    <input  name="general_izin_tipe" value="{{$detail_karyawan->general_izin_tipe}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">NOMOR</label>
                                    <input  name="general_izin_nomor" value="{{$detail_karyawan->general_izin_nomor}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">MASA BERLAKU</label>
                                    <input  name="general_izin_masa" value="{{$detail_karyawan->general_izin_masa}}" type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">NAMA KONTRAK DARURAT</label>
                                    <input  name="general_nama_kontak_darurat" value="{{$detail_karyawan->general_nama_kontak_darurat}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">NOMOR HP KONTAK DARURAT</label>
                                    <input  name="general_nohp_kontak_darurat" value="{{$detail_karyawan->general_nohp_kontak_darurat}}" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Informasi Pekerjaan</label>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">PERUSAHAAN</label>
                                    <input  name="general_lokasi_perusahaan" value="{{$detail_karyawan->general_lokasi_perusahaan}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">NEGARA</label>
                                    <input  name="general_lokasi_negara" value="{{$detail_karyawan->general_lokasi_negara}}" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">SITE</label>
                                    <input  name="general_lokasi_site" value="{{$detail_karyawan->general_lokasi_site}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">DEPARTEMEN</label>
                                    <input  name="general_department" value="{{$detail_karyawan->general_department}}" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">JABATAN</label>
                                    <input  name="general_riwayat_jabatan" value="{{$detail_karyawan->general_riwayat_jabatan}}" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label form-label">FIRST JOIN</label>
                                    <input  name="general_riwayat_first_join" value="{{$detail_karyawan->general_riwayat_first_join}}" type="text" class="form-control" required>
                                </div>
                            </div>                     
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="">Kontrak 1</label>
                                    <div class="row mb-1">
                                            <label class="col-sm-4 col-form-label form-label">START</label>
                                        <div class="col-sm-8">
                                            <input  name="general_riwayat_kontrak_1_mulai" value="{{$detail_karyawan->general_riwayat_kontrak_1_mulai}}" type="date" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <label class="col-sm-4 col-form-label form-label">END</label>
                                        <div class="col-sm-8">
                                            <input  name="general_riwayat_kontrak_1_berakhir" value="{{$detail_karyawan->general_riwayat_kontrak_1_berakhir}}" type="date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Kontrak II</label>
                                    <div class="row mb-1">
                                            <label class="col-sm-4 col-form-label form-label">START</label>
                                        <div class="col-sm-8">
                                            <input  name="general_riwayat_kontrak_2_mulai" value="{{$detail_karyawan->general_riwayat_kontrak_2_mulai}}" type="date" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <label class="col-sm-4 col-form-label form-label">END</label>
                                        <div class="col-sm-8">
                                            <input  name="general_riwayat_kontrak_2_berakhir" value="{{$detail_karyawan->general_riwayat_kontrak_2_berakhir}}" type="date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Kontrak III</label>
                                    <div class="row mb-1">
                                            <label class="col-sm-4 col-form-label form-label">START</label>
                                        <div class="col-sm-8">
                                            <input  name="general_riwayat_kontrak_3_mulai" value="{{$detail_karyawan->general_riwayat_kontrak_3_mulai}}" type="date" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <label class="col-sm-4 col-form-label form-label">END</label>
                                        <div class="col-sm-8">
                                            <input  name="general_riwayat_kontrak_3_berakhir" value="{{$detail_karyawan->general_riwayat_kontrak_3_berakhir}}" type="date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Kontrak Berjalan</label>
                                    <div class="row mb-1">
                                            <label class="col-sm-4 col-form-label form-label">START</label>
                                        <div class="col-sm-8">
                                            <input  name="general_kontrak_berjalan_mulai" value="{{$detail_karyawan->general_kontrak_berjalan_mulai}}" type="date" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <label class="col-sm-4 col-form-label form-label">END</label>
                                        <div class="col-sm-8">
                                            <input  name="general_kontrak_berjalan_berakhir" value="{{$detail_karyawan->general_kontrak_berjalan_berakhir}}" type="date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="col-form-label form-label">CATATAN</label>
                                    <textarea name="general_catatan" style="height: 100px; width:100%" required>{{$detail_karyawan->general_catatan ?? ''}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>   
                        </div>                                              
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@stop