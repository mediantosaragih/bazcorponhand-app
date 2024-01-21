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
        Schema::create('shift_daily', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->nullable();
            $table->string('shift_daily_code');
            $table->string('day_type');
            $table->string('shift_daily_code_ph');
            $table->string('flexible_shift');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('grace_for_late');
            $table->string('productive_work_time');
            $table->string('break_time');
            $table->string('remark');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shift_daily');
    }
};
