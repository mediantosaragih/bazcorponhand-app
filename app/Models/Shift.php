<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $table = "shifts";
    protected $guarded = ['id'];
    use HasFactory;

    public function employees()   
    {
        return $this->belongsToMany(Employe::class, 'absensis');
    }
}
