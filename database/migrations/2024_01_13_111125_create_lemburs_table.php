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
       Schema::create('lemburs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('jumlah_jam_lembur');
            $table->decimal('harga_lembur', 8, 2); // Assuming a decimal type for price, adjust as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lemburs');
    }
};
