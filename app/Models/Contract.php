<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $table="contract";

    protected $fillable = [
        'user_id',
        'trade',
        'c_bot',
        'c_buy',
        'c_sell',
        'qty',
        'profit',
        'c_new',
        'c_name',
        'c_status',
        'c_ref',
        'c_time','created_at','updated_at'
    ];
}
