<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundtransfer extends Model
{
    use HasFactory;
    
    protected $table='transfer';
    
    protected $fillable = ['t_amt', 't_from', 't_to', 't_new', 'u_id', 't_time'];


    public function user()
    {
        return $this->belongsTo('App\Models\User', 'u_id');
    } 
}
