<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceLocation extends Model
{
    use HasFactory;
    protected $table = "attendance_location";
    public $timestamps = false;
    public $incrementing = false;
}
