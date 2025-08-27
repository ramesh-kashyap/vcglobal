<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depositaddress extends Model
{
    use HasFactory;
    protected $table="deposit_address";
    protected $primaryKey = 'd_id';


    protected $fillable = [
        'd_id','d_sym','d_ref'
    ];

}
