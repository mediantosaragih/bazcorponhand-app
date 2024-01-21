<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftDaily extends Model
{
    use HasFactory;

    protected $table = "shift_daily";

    protected $fillable = [
        'shift_daily_code',
        'day_type',
        'shift_daily_code_ph',
        'flexible_shift',
        'start_time',
        'end_time',
        'grace_for_late',
        'productive_work_time',
        'break_time',
        'remark',
    ];
}
