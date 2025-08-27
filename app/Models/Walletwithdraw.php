<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walletwithdraw extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_id_fk',
        'wallet_address',
        'withdraw_method','created_at','updated_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    } 
}
