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
        Schema::create('general_sallary', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sallary_id');
            $table->string('nama_karyawan');
            $table->string('departemen');
            $table->string('jenis_slip_gaji');
            $table->string('gaji_pokok');
            $table->string('net_sallary');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_sallary');
    }
};
