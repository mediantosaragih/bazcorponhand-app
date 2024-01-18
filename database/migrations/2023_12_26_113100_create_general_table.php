<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('general', function (Blueprint $table) {
            $table->unsignedBigInteger('general_id')->nullable();
            $table->bigInteger('general_karyawan_id');
            $table->bigInteger('general_nomor_kartu_akses');
            $table->string('general_firstname');
            $table->string('general_lastname');
            $table->string('general_nickname');
            $table->bigInteger('general_nik');
            $table->string('general_tempat_lahir');
            $table->date('general_tanggal_lahir');
            $table->string('general_jenis_kelamin');
            $table->string('general_status_perkawinan');
            $table->string('general_agama');
            $table->integer('general_tinggi_badan');
            $table->integer('genaral_berat_badan');
            $table->string('general_golongan_darah');
            $table->string('general_alamat_ktp',500);
            $table->string('general_alamat_domisili',500);
            $table->bigInteger('general_npwp');
            $table->bigInteger('general_bpjs_ketenagakerjaan');
            $table->bigInteger('general_bpjs_kesehatan');
            $table->bigInteger('general_no_rek');
            $table->bigInteger('general_no_hp');
            $table->string('general_email');
            $table->string('general_medsos');
            $table->string('general_ukuran_baju',50);
            $table->string('general_ukuran_celana',50);
            $table->string('general_ukuran_sepatu',50);
            $table->string('general_bahasa');
            $table->string('general_pendidikan_a');
            $table->string('general_pendidikan_b');
            $table->string('general_keterampilan');
            $table->string('general_izin_tipe');
            $table->bigInteger('general_izin_nomor');
            $table->date('general_izin_masa');
            $table->string('general_nama_kontak_darurat');
            $table->bigInteger('general_nohp_kontak_darurat');
            $table->string('general_lokasi_perusahaan');
            $table->string('general_lokasi_negara');
            $table->string('general_lokasi_site');
            $table->string('general_department');
            $table->string('general_riwayat_jabatan');
            $table->string('general_riwayat_first_join');
            $table->date('general_riwayat_kontrak_1_mulai');
            $table->date('general_riwayat_kontrak_1_berakhir');
            $table->date('general_riwayat_kontrak_2_mulai');
            $table->date('general_riwayat_kontrak_2_berakhir');
            $table->date('general_riwayat_kontrak_3_mulai');
            $table->date('general_riwayat_kontrak_3_berakhir');
            $table->date('general_kontrak_berjalan_mulai');
            $table->date('general_kontrak_berjalan_berakhir');
            $table->string('general_catatan',5000);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general');
    }
};
