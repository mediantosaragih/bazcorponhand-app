<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = "general_divisi";
    protected $guarded = ['id'];
    use HasFactory;
   
    public function general()
    {
        return $this->hasMany(General::class, 'divisi_id');
    }
}
