<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $table = "absensis";
    public $timestamps = false;
    protected $fillable = ['tanggal','check_in', 'check_out', 'shift_id', 'karyawan_id'];
}
