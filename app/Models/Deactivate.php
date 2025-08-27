<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deactivate extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'created_at', 'updated_at', 'user_id','amt','charge','net_amt',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    } 
}
