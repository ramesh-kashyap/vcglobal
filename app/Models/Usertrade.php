<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usertrade extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'exchange',
        'symbol',
        'side',
        'entry_price',
        'exit_price',
        'quantity',
        'profit',
        'profit_type','created_at','updated_at'
    ];
}
