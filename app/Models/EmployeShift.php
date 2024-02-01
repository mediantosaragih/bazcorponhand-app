<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employe;

class EmployeShift extends Model
{
    use HasFactory;
    protected $table = "absensis";
    protected $guarded = ['id'];

    public function employes()
    {
    return $this->belongsTo(Employe::class, 'karyawan_id');
    }

    public function shifts()
    {
        return $this->belongsTo(Shift::class, 'shift_id');
    }
}
