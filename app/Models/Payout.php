<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payout extends Model
{
    protected $fillable = [
        'reccuring_income', 'user_id_fk', 'user_id','reffrial_income','ttime','revenue_share','reward_income','total','deduction','withdraw_amt','created_at','payout_date','updated_at','tds','team_reveune','salary_income','service_charge'
    ];

      public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    } 
}
