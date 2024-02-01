<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_code',
        'group_name',
        'overtime_based_on',
        // Add other fillable attributes as needed
    ];
}
