<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'password','phone','username','sponsor','ParentId','position','active_status','jdate','level','tpassword','adate','PSR','TPSR','u_credits','u_strategy','u_profit','u_ref','u_opt','uid','opx','opx_release'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'sponsor');
    } 


    public function sponsor_detail()
    {
        return $this->belongsTo('App\Models\User', 'sponsor');
    } 


    public function FundBalance()
    {
    $balance = Auth::user()->buy_fundAmt->sum('amount_total_fiat')-(Auth::user()->buy_packageAmt());
    return $balance;
    } 

    public function buy_fundAmt(){
        return $this->hasMany('App\Models\CoinpaymentTransaction','buyer_name','username')->where('status','>=',1);
    }



    public function buy_packageAmt(){
        $amt= Investment::where('active_from',Auth::user()->username)->where('walletType',1)->sum('amount');
        return $amt;
    }

    public function dailyIncentive()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Ai Trading Profit');
    } 

    public function user_direct()
    {
        return $this->hasMany('App\Models\User','sponsor','id')->where('active_status','Active');
    } 


    
    public function leadership_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Referral Reveune Share');
    } 
        
    public function level_bonus_revenus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Revenue Share');
    } 

      public function level_bonus_team()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Team Reveune Share');
    } 
      
      public function level_bonus_reward()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Reward Income');
    } 
      
      public function level_bonus_salary()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Salary Income');
    } 
      
      
    public function trading_profit()
    {
        return $this->hasMany('App\Models\User_trade','user_id','id')->where('profitType',1);
    } 
       
    public function debit()
    {
        return $this->hasMany('App\Models\Debit','user_id','id');
    } 
   
    public function trading_lose()
    {
        return $this->hasMany('App\Models\User_trade','user_id','id')->where('profitType',2);
    } 

    public function sponsorship_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Direct Referral Income');
    } 

     public function fundingwallet()
    {
    $balance = (Auth::user()->investment->sum('amount')+Auth::user()->fundtransferId->where('wallet_to',1)->sum('amt')+Auth::user()->deactivates->sum('net_amt')) - (Auth::user()->fundtransferId->where('wallet_from',1)->sum('amt'));
    return $balance;
    }   
    
    public function referwallet()
    {
    $balance = Auth::user()->totalIncome->where('remarks','Referral Income')->sum('comm') - (Auth::user()->fundtransferId->where('wallet_from',2)->sum('amt'));
    return $balance;
    }  
    
    public function strategywallet()
    {
    $balance = (Auth::user()->fundtransferId->where('wallet_to',5)->sum('net_amt'));
    return $balance;
    }  

    public function profitwallet()
    {
        $balance = Auth::user()->totalIncome->where('remarks','ROI')->sum('comm') - (Auth::user()->fundtransferId->where('wallet_from',3)->sum('amt'));
        return $balance;
    }  

    public function opxwallet()
    {
    $balance = 0;
    return $balance;
    }  
          
    public function fundtransferId()
    {
        return $this->hasMany('App\Models\Fundtransfer','user_id','id');
    } 

    public function deactivates()
    {
        return $this->hasMany('App\Models\Deactivate','user_id','id');
    } 

    public function reward_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Royalty Bonus');
    } 


    public function booster_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Booster Income');
    } 
    
    public function club_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Club Income');
    } 
    
     
    public function totalIncome()
    {
        return $this->hasMany('App\Models\Income','user_id','id');
    } 
    
    
    
    public function available_balance()
    {
    $balance = (Auth::user()->users_incomes()) - (Auth::user()->withdraw());
    return $balance;
    } 

    public function principleBalance()
    {
    $balance = (Auth::user()->investment->sum('amount'))-(Auth::user()->tradeAmt+Auth::user()->withdrawPrinciple());
    return $balance;
    } 
    
 public function investMentWithWithdraw()
    {
    $balance = (Auth::user()->investment->sum('amount'))-(Auth::user()->withdrawPrinciple());
    return $balance;
    } 

    public function users_incomes()
    {
        return  Income::where('user_id',Auth::user()->id)->sum('comm');
    } 
    

    public function withdraw()
    {
        return  Withdraw::where('user_id',Auth::user()->id)->where('status','!=','Failed')->sum('amount');
    } 
    public function withdrawPrinciple()
    {
        return  Withdraw::where('user_id',Auth::user()->id)->where('status','!=','Failed')->where('walletType',2)->sum('amount');
    } 


    public function investment(){
        return $this->hasMany('App\Models\Investment','user_id','id')->where('status','Active');
    }


    public function withdrawal(){
        return $this->hasMany('App\Models\Withdraw','user_id','id')->where('walletType',1);
    }

  public function Priciplewithdrawal(){
        return $this->hasMany('App\Models\Withdraw','user_id','id')->where('walletType',2);
    }


  

    
}
