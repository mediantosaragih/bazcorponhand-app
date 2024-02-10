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
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->dateTime('check_in'); 
            $table->dateTime('check_out');
            $table->string('lokasi_absensi');
            $table->string('lokasi_code');
            $table->string('lokasi_nama');
            $table->string('lokasi_kordinat');  

            $table->unsignedBigInteger('shift_id');
            $table->foreign('shift_id')->references('id')->on('shifts')->onDelete('cascade');
        
            $table->unsignedBigInteger('karyawan_id');
            $table->foreign('karyawan_id')->references('id')->on('employes')->onDelete('cascade'); // Assuming 'employees' is the correct table name
            
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};
