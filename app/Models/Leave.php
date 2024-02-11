<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;
    public $autoincrement = false;
    protected $fillable = [
        'id',
        'leave_code',
        'leave_name',
        'eligibility_leave',
        'limit_date',
        'deducted_leave',
        'day_count',
        'enable_minus',
        'balance_carry_over',
        'created_by'
    ];

}
