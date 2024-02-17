<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    protected $table = "general_overtime";

    use HasFactory;
    protected $guarded = ['id'];

}
