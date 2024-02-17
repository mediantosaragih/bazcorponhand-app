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
        Schema::create('general_overtime', function (Blueprint $table) {
            $table->id();
            $table->string('overtime_id_karyawan');
            $table->date('overtime_tanggal');
            $table->time('overtime_mulai');
            $table->time('overtime_berakhir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_overtime');
    }
};
