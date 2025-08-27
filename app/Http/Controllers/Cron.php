<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investment;
use App\Models\Income;
use App\Models\User;
use App\Models\Fundtransfer;
use App\Models\Reward;
use App\Models\Withdraw;
use Illuminate\Support\Facades\URL;
use App\Models\Trade;

use App\Models\Contract;
use Illuminate\Support\Facades\Http;
use DateTime;
use DateInterval;
use DatePeriod;
use Carbon\Carbon;
use Helper;
use Hash;
use Plisio\PlisioSdkLaravel\Payment;

class Cron extends Controller
{
    
public function __construct()
{
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
}
public function tradeAmt()
{
  User::where('id','>=',0)->update(['tradeAmt' => 0]);
}


public function releasefund()
{

$allResult=User::where('active_status','Active')->get();
$todays=Date("Y-m-d");

if ($allResult)
{
 foreach ($allResult as $key => $value)
 {

  $userID=$value->id;

  $sponsorID=User::where('sponsor',$userID)->where('active_status','Active')->count();
  $today=date("Y-m-d");

  if ($sponsorID<=0 && $value->u_ref>0)
  {
    
       echo "<br>";
          echo "ID : ".$value->username."<br>";
          echo "Refer w : ".$value->u_ref;

   \DB::table('users')->where('id',$value->id)->update(['u_ref' => 0]);
  }

 }
}




}



function manage_trade() 
{
 $trade =\DB::table('contract')->where('c_status',1)->orderBy('c_time','DESC')->first();
$status = false;
$tcoins_arr  = coinrates();
if (!$trade) {
  $status = true;
}
if ($status == true) {
  $data = array(
    'status' => $status,
  );
} else {

  $btc = "";
  $side = $trade->c_buy;
  $entry_price = round($tcoins_arr[$trade->c_name],5);
  $position = $trade->qty;

  $action = "incre";
  $profit = $position + rand(1, 21);
  $entry_price = $entry_price + rand(0.1 ,0.9);
  if ($profit % 2 != 0) {
    $action = "decre";
    $profit = $position - rand(1, 11);
    $entry_price = $entry_price - rand(0.1 ,0.9);
  }

  $data = array(
    'profit' => $profit,
    'action' => $action,
    'btc_price' => $entry_price,
    'status' => $status,
  );
}

// Encode the object as JSON
$jsonData = json_encode($data);
header('Content-Type: application/json');
echo  $jsonData;

}


public function stop_trade(){
  $contracts = Contract::where('c_status', 1)->get();

  foreach ($contracts as $contract) {
    $user = User::where('id', $contract->user_id)->first();

    if ($user) {
        $u_str = $user->u_strategy;

        // Update profit
            if($contract->decision=="1")
            {
              $updated_p = $user->u_profit + $contract->profit;
            $user->u_profit = $updated_p;
            $user->save();   
            }
            else
            {
            $updated_p = $user->u_profit;
            }
        // Update contract status and profit
        Contract::where('c_id',$contract->c_id)->update(['c_status' => '-1','c_new'=>$updated_p]);
        // $contract->save();

        $ref = $contract->c_ref;
        $user_id = $user->id;
       if($contract->decision=="1")
       {
         add_level_income($user_id,$ref);   
       }
       
    }
}


}


public function generate_roi()
{


  // auto trade script

  $factor = 0;
  $decision = true;

  $trade_index = \DB::table('variables')->where('v_id',11)->first()->trade_index;
  // dd($trade_index);
  if($trade_index < 0 ){
    exit();
   }elseif($trade_index == 15) {
      \DB::table('variables')->where('v_id',11)->update(['trade_index' => 0]);
     $trade_index = 0;
   }
   if ($trade_index == 4 || $trade_index == 7 || $trade_index == 11) {
    $decision=false;
  }
  $factor_arr = array(
    500, 400, 300, 250, 554,
    500, 300, 900, 300, 400,
    500, 320, 150, 500, 400
  );
  $factor = $factor_arr[$trade_index];
  $trade_index++;
  \DB::table('variables')->where('v_id',11)->update(['trade_index' => $trade_index]);
  $tcoins_arr =coinrates();
  // dd($tcoins_arr);
$allResult=User::where('active_status','Active')->where('u_strategy','>=',50)->get();
$todays=Date("Y-m-d");
$day=Date("l");
if ($allResult)
{
 foreach ($allResult as $key => $value)
 {

  $userID=$value->id;
   $u_str = $value->u_strategy;

   $idx = -1;
   if ($u_str >= 50 && $u_str <= 999) {
     $idx = 1;
   } elseif ($u_str >= 1000 && $u_str <= 4999) {
     $idx = 2;
   } elseif ($u_str >= 5000 && $u_str <= 9999) {
     $idx = 3;
   } elseif ($u_str >= 9999) {
     $idx = 4;
   }

     // Trading Section Starts

     $zero_arr = array("eth", "doge", "btc", "btc", "bnb", "btc", "eth", "eth", "btc", "btc", "bnb", "btc", "eth", "btc", "eth", "car");
     $v_index = \DB::table('variables')->where('v_id',11)->first()->v_index;
     $trade = "Buy";
    if (isEven($v_index)) {
      $trade = "Sell";
    }
    $new_index = $v_index + 1;
    \DB::table('variables')->where('v_id',11)->update(['v_index' => $new_index]);
    if ($v_index == 16) {
      \DB::table('variables')->where('v_id',11)->update(['v_index' => 0]);
      $v_index = 1;
    }
  // Got Symbol
  $sym = $zero_arr[$v_index];
  $bots = \DB::table('machines')->where('m_id',$idx)->first();
  $bot_name = $bots->m_name;
  $percent = $bots->m_return/ $factor;
  $percent = number_format($percent, 5, '.', '');
  $usd = ($u_str * 0.7);
  $buy_price_btc = number_format($tcoins_arr[$sym], 5, '.', '');
  $sell_price_btc = number_format($tcoins_arr[$sym] + ($tcoins_arr[$sym] * $percent), 5, '.', '');
  $buy_price_usd = $usd / $buy_price_btc; //qty
  $trade_profit = $usd * ($percent);
  $ref = ($u_str * 0.3) * ($percent);
  $currentDateTime = date("Y-m-d H:i:s");
  if ($decision) {
    if ($trade == "Buy") {

      $sell_price_btc = number_format($tcoins_arr[$sym], 5, '.', '');
      $buy_price_btc = number_format($tcoins_arr[$sym] - ($tcoins_arr[$sym] * $percent), 5, '.', '');
      $buy_price_usd = $usd / $buy_price_btc; //qty
      $sell_price_usd = $usd / $sell_price_btc;
      \DB::table('contract')->insert(['user_id'=> $userID,'trade'=>$trade,'c_bot' => $bot_name,'c_buy'=>$buy_price_btc,'c_sell'=>$sell_price_btc,'qty'=>$buy_price_usd,'profit'=>$trade_profit,'c_name'=>$sym,'c_status'=>1,'c_ref'=>$ref,'c_time'=>$currentDateTime]);

    }
    else
    {
      \DB::table('contract')->insert(['user_id'=> $userID,'trade'=>$trade,'c_bot' => $bot_name,'c_buy'=>$sell_price_btc,'c_sell'=>$buy_price_btc,'qty'=>$buy_price_usd,'profit'=>$trade_profit,'c_name'=>$sym,'c_status'=>1,'c_ref'=>$ref,'c_time'=>$currentDateTime]);

    }

  }
  else
  {
    if ($trade == "Buy")
     {
      $sell_price_btc = number_format($tcoins_arr[$sym], 5, '.', '');
      $buy_price_btc = number_format($tcoins_arr[$sym] - ($tcoins_arr[$sym] * $percent), 5, '.', '');
      $buy_price_usd = $usd / $buy_price_btc; //qty
      $sell_price_usd = $usd / $sell_price_btc;
      \DB::table('contract')->insert(['user_id'=> $userID,'trade'=>$trade,'c_bot' => $bot_name,'c_buy'=>$sell_price_btc,'c_sell'=>$buy_price_btc,'qty'=>$buy_price_usd,'profit'=>$trade_profit,'c_name'=>$sym,'c_status'=>1,'c_ref'=>$ref,'c_time'=>$currentDateTime,'decision'=>"-1"]);
     }
     else
     {
      \DB::table('contract')->insert(['user_id'=> $userID,'trade'=>$trade,'c_bot' => $bot_name,'c_buy'=>$buy_price_btc,'c_sell'=>$sell_price_btc,'qty'=>$buy_price_usd,'profit'=>$trade_profit,'c_name'=>$sym,'c_status'=>1,'c_ref'=>$ref,'c_time'=>$currentDateTime,'decision'=>"-1"]);

     }
  }

 }
 
}




}











  public function transfer_user()

    {  
      ini_set('max_execution_time', 120); // 120 seconds
    date_default_timezone_set("Asia/Kolkata"); 
    $allResult = \DB::connection('mysql2')->table('miners')->get();
    if ($allResult) 
    {
       $counter=1;
     foreach ($allResult as $key => $value) 
     {

     $userID=$value->u_id;
     $username =substr(rand(),-2).substr(time(),-3).substr(mt_rand(),-2);

     $sponsorID = \DB::connection('mysql2')->table('refs')->where('referred',$value->ref_id)->first();
     if ($sponsorID) {

     
     
      $sponsorMiner = \DB::connection('mysql2')->table('miners')->where('ref_id',$sponsorID->ref_id)->first();
      $emailId=($sponsorMiner)?$sponsorMiner->u_email:0;
      $referralId = User::where('email',$emailId)->first();
      $referralId = ($referralId)?$referralId->id:0;
     }
     else
     {
      $referralId = 0;
     }
     

     $status = ($value->a_status)?"Active":"Block";


           
          
     $data['name'] = $value->u_name;
    
     $data['uid'] = $userID;
     $data['username'] = $username;
     $data['email'] = $value->u_email;
     $data['active_status'] =$status;
     $data['password'] =   Hash::make($value->u_pwd);
     $data['tpassword'] =   Hash::make($value->u_pwd);
     $data['PSR'] = $value->u_pwd;
     $data['TPSR'] = $value->u_pwd;
     $data['u_credits'] = $value->u_credits;
     $data['u_strategy'] = $value->u_strategy;
     $data['u_profit'] = $value->u_profit;
     $data['u_ref'] = $value->u_ref;
     $data['u_opt'] = $value->u_opt;
     $data['opx'] = $value->opx;
     $data['opx_release'] = $value->opx_release;
     $data['sponsor'] = $referralId;
     $data['package'] = 0;
     $data['jdate'] = date('Y-m-d');
     $data['created_at'] = Carbon::now();
     $data['remember_token'] = substr(rand(),-7).substr(time(),-5).substr(mt_rand(),-4);
     $sponsor_user =  User::orderBy('id','desc')->limit(1)->first();
     $data['level'] = 0;
     $data['ParentId'] =  ($sponsor_user)?$sponsor_user->id:0;
     $user_data =  User::create($data);
     


     $counter++;   
     }
    } 
    
    
    

}








public function transferData()

{  
  ini_set('max_execution_time', 120); // 120 seconds
date_default_timezone_set("Asia/Kolkata"); 
$allResult = \DB::table('users')->get();
if ($allResult) 
{
   $counter=1;
 foreach ($allResult as $key => $value) 
 {

 $userID=$value->id;


// Update balances in the User model
$f_bal=calFundingBalance($value->id);

// dd($f_bal);
$s_bal=calStrategyBalance($value->id);
$p_bal=calProfitBalance($value->id);
$r_bal=calReferBalance($value->id);
$o_bal=calOPXBalance($value->id);

\DB::table('users')->where('id',$value->id)->update([
  'funding_wallet' => $f_bal,
  'strategy_wallet' => $s_bal,
  'profit_wallet' => $p_bal,
  'refer_wallet' => $r_bal,
  'opx_wallet' => $o_bal,
]);
 
 

 $counter++;   
 }
} 




}







public function transfer_investment()

{  
  ini_set('max_execution_time', 120); // 120 seconds
date_default_timezone_set("Asia/Kolkata"); 
$allResult = \DB::connection('mysql2')->table('deposits')->get();
if ($allResult) 
{
   $counter=1;
 foreach ($allResult as $key => $value) 
 {

 $userID=$value->u_id;
 
 $userDetail = User::where('uid',$userID)->first();

 if ($userDetail) {
  if ($value->d_status=="1") 
 {
  $status = "Active";
 }
 else
 {
  $status = "Pending";
 }
 
 $amount = $value->d_amt;
$newbalance = $value->d_new;
      

$data = [
 'plan'=>'1',
 'orderId'=>mt_rand(1000000, 9999999),
 'transaction_id' =>$value->d_ref,
 'user_id' => $userDetail->id,
 'user_id_fk' => $userDetail->username,
 'amount' => $amount,
 'payment_mode' =>$value->d_sym,
 'status' => $status,
 'sdate' => $value->d_time,
 'created_at' => $value->d_time,
 'active_from' => $userDetail->username,
];
$payment =  Investment::insert($data);



 }
 

 $counter++;   
 }
} 




}





public function transfer_withdraw()

{  
  ini_set('max_execution_time', 120); // 120 seconds
date_default_timezone_set("Asia/Kolkata"); 
$allResult = \DB::connection('mysql2')->table('withdraws')->get();
if ($allResult) 
{
   $counter=1;
 foreach ($allResult as $key => $value) 
 {

 $userID=$value->u_id;
 
 $userDetail = User::where('uid',$userID)->first();

 if ($userDetail) {
  if ($value->w_status=="1") 
 {
  $status = "Approved";
 }
 elseif($value->w_status=="0")
 {
  $status = "Pending";
 }
 else
 {
  $status = "Failed";
 }
 
 $amount = $value->w_amt;
$newbalance = $value->w_new;
      

$data = [
 'txn_id' =>md5(uniqid(rand(), true)),
 'user_id' => $userDetail->id,
 'user_id_fk' => $userDetail->username,
 'amount' => $amount,
 'payment_mode' =>$value->w_sym,
 'status' => $status,
 'wdate' => $value->w_time,
 'created_at' => $value->w_time,
];
$payment =  Withdraw::insert($data);



 }
 

 $counter++;   
 }
} 




}




public function transfer_income($start,$end)

{  
  ini_set('max_execution_time', 120); // 120 seconds
date_default_timezone_set("Asia/Kolkata"); 
$allResult = \DB::connection('mysql2')->table('ref_prof')->where('r_id','>',$start)->where('r_id','<=',$end)->get();
if ($allResult) 
{
   $counter=1;
 foreach ($allResult as $key => $value) 
 {

 $referred=$value->referred;
 $miner = \DB::connection('mysql2')->table('miners')->where('ref_id',$referred)->first();
 $userID = $miner?$miner->u_id:0;
 
 $userDetail = User::where('uid',$userID)->first();
 $ruserDetail = User::where('uid',$value->r_share)->first();

 if ($userDetail && $value->r_profit>0) {
    

$data['remarks'] = 'Referral Income';
$data['comm'] = $value->r_profit;
$data['level'] =0;
$data['rname'] =($ruserDetail)?$ruserDetail->username:0;
$data['fullname'] =($ruserDetail)?$ruserDetail->name:0;
$data['amt'] = $value->r_profit;
$data['invest_id']=0;
$data['ttime'] = $value->r_time;
$data['created_at'] = $value->r_time;
$data['user_id_fk'] = $userDetail->username;
$data['user_id']=$userDetail->id; 
$income = Income::Create($data);



 }
 

 $counter++;   
 }
} 




}




 public function reward_bonus()
    {  

    $allResult=User::where('active_status','Active')->get();
// print_r($allResult);die;
    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
      $user_id=$value->id;
      $username=$value->username;
      $Power_leg=$value->power_leg;
      $Vicker_leg=$value->vicker_leg;
      
        // $tolteam=$this->my_level_team_count($user_id);
        
        $rightTeam_arr=$this->team_by_position($user_id,'Right');
       $leftTeam_arr=$this->team_by_position($user_id,'Left');
       
       
    //   $total_team=(!empty($tolteam)?count($tolteam):0);
       $rightBusiness=(!empty($rightTeam_arr))?Investment::whereIn('user_id',$rightTeam_arr)->where('status','Active')->sum('amount'):0;
       $leftBusiness=(!empty($leftTeam_arr))?Investment::whereIn('user_id',$leftTeam_arr)->where('status','Active')->sum('amount'):0;
       
       
    //   echo $rightBusiness."<br>";
    //   echo $leftBusiness."<br>";
       
     
     $require_power_bunsess=array('0','1000','3000','7000','20000','40000','80000','160000','320000','640000');
     $require_bonus=array('0','1','3','7','20','40','80','160','320','640');
 
     
     for($p=1;$p<10;$p++)
      {
        $my_gen_busniess=$require_power_bunsess[$p];
  
        $bonus=$require_bonus[$p];
 
        
        $toatal_business=Reward::where('status','Approved')->where('user_id',$user_id)->sum("total_business");
        $total_business=($toatal_business)?$toatal_business:0;
       
        // $power_leg=$my_gen_busniess*50/100;
        // $vicker_leg=$my_gen_busniess*50/100;
        
        // $Require_power_leg=$my_gen_busniess*60/100;
        // $Require_vicker_leg=$my_gen_busniess*40/100;
        
        $check_level=Reward::where('status','Approved')->where('user_id',$user_id)->where('level',$p)->count("id");
        // echo "<br>";
        //  echo $rightBusiness;
        //  echo "<br>";
        //  echo $leftBusiness;
        //  echo "<br>";
        //  echo $p;
        //  echo "<br>"; 
        //  echo "required p".$my_gen_busniess;
        //  echo "<br>"; 
        //  echo "required v".$my_gen_busniess;
        //  echo "<br>";
        if($check_level<=0)
        {
         $goalstatus=( $rightBusiness >= $my_gen_busniess && $leftBusiness >= $my_gen_busniess? 'Achieved':'Pending');
           if ($goalstatus=='Achieved')
               {
                   
                  echo "<br>";
          echo "ID : ".$username."<br>";
          echo "Level : ".$p;
          User::where('id', $user_id)
           ->update([
               'rank' => $p
            ]);
            
            $data['remarks'] = 'Reward Bonus';
            $data['amount'] = $bonus;
            $data['total_business'] = $my_gen_busniess;
            $data['level']=$p;
            $data['tdate'] = date("Y-m-d");
            $data['user_id_fk'] =$username;
            $data['user_id']=$user_id; 
            $data['status']='Approved'; 
          $income = Reward::firstOrCreate(['remarks' => 'Reward Bonus','level'=>$p,'user_id'=>$user_id],$data);   
    
    
               }
               
        }

          
      }
             
     
      
     
     }
    } 

}




public function dailyIncentive()
{


    $allResult=User::where('active_status','Active')->get();
    $todays=Date("Y-m-d");


    if ($allResult)
    {
        foreach ($allResult as $key => $value)
        {
        $userID=$value->id;
        $userName = $value->username;
        $userRank = $value->rank;
        
        $rewardDetail = Reward::where('user_id',$userID)->orderBy('id','DESC')->limit(1)->first();
        
        if($rewardDetail)
        {
           
            $data['remarks'] = 'Royalty Bonus';
            $data['comm'] = $rewardDetail->amount;
            $data['level'] = $rewardDetail->level;
            $data['amt'] = $rewardDetail->amount;
            $data['invest_id']=$rewardDetail->id;
            $data['ttime'] = date("Y-m-d");
            $data['user_id_fk'] = $userName;
            $data['user_id']=$userID; 
          $income = Income::firstOrCreate(['remarks' => 'Royalty Bonus','ttime'=>date("Y-m-d"),'user_id'=>$userID],$data);
           
        }
        
        
   


        }
    }
}




public function dynamicupicallback()
{
    
 
  
//   echo "Hello";
//   print_r($response);die();
         $response = file_get_contents('php://input');
          date_default_timezone_set('Asia/Kolkata');
          $day=date('l');
          $todays=date("Y-m-d");
         $result = json_decode($response, true);
           
         \DB::table('activities')->insert(['data' =>$response]);  
         if(!empty($result))
         {
             
             if($result['status']=="completed")
             {
                 
              $orderId= $result['order_number'];
              $username= $result['order_name'];
              $amount= $result['source_amount'];
              $updateTrue = Investment::where('orderId',$orderId)->where('status','Pending')->update(['status' => 'Active']);
           
           if($updateTrue)  
           {
            
             $user_detail=User::where('username',$username)->first();
              if ($user_detail->active_status=="Pending")
              {   
              $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$amount);
               User::where('id',$user_detail->id)->update($user_update);
           
              }
             else 
             {
               $total=$user_detail->package+$amount;
                $user_update=array('package'=>$total,'active_status'=>'Active');
              User::where('id',$user_detail->id)->update($user_update); 
             }
                
                  sendEmail($user_detail->email, 'Deposit Successfully -'.siteName(), [
                    'name' => $user_detail->name,
                    'username' => $user_detail->username,
                    'amount' => $amount,
                    'plan' => 1,
                    'date' => date("D, d M Y h:i:s a", strtotime(Date("Y-m-d H:i:s"))),
                    'viewpage' => 'activation',
    
                 ]);
                     
            add_direct_income($user_detail->id,$amount);

                    
           }
           
                 
             }
             else
             {
                if($result['status']=="mismatch" && $result['amount'] >= $result['invoice_total_sum']) 
                {
                    
                         
              $orderId= $result['order_number'];
              $username= $result['order_name'];
              $amount= $result['source_amount'];
              $updateTrue = Investment::where('orderId',$orderId)->where('status','Pending')->update(['status' => 'Active']);
           
           if($updateTrue)  
           {
            
             $user_detail=User::where('username',$username)->first();
              if ($user_detail->active_status=="Pending")
              {   
              $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$amount);
              User::where('id',$user_detail->id)->update($user_update);
          
             }
             else
             {
               $total=$user_detail->package+$value->amount;
                $user_update=array('package'=>$total,'active_status'=>'Active');
              User::where('id',$user_detail->id)->update($user_update); 
             }
                
          
                  add_direct_income($user_detail->id,$amount);
                  
                  
                  sendEmail($user_detail->email, 'Deposit Successfully  -'.siteName(), [
                    'name' => $user_detail->name,
                    'username' => $user_detail->username,
                    'amount' => $amount,
                    'plan' => 1,
                    'date' => date("D, d M Y h:i:s a", strtotime(Date("Y-m-d H:i:s"))),
                    'viewpage' => 'activation',
    
                 ]);
                     
          

                    
           }
           
           
                    
                }
             }
             
         }
        
            
         
        
           
}


        public  function my_binary($userid){
        $arrin=array($userid);
        $ret=array();
        // print_r($arrin);die();
        while(!empty($arrin)){
         $alldown= User::select('id')->whereIn('Parentid',$arrin)->get()->toArray();
         if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[]=$arrin;
              
              
            }else{
                $arrin = array();
            } 
        }
        // continue;    
        $final = array();         
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }

        return $final;
        
    }  

        public  function team_by_position($userid,$position){
        $ret=array();
        $get_position_user=User::where('Parentid',$userid)->where('position',$position)->first();
        if($get_position_user){
        
            $ret=$this->my_binary($get_position_user->id);
            $ret[]=$get_position_user->id;
        }
       
        return $ret;
    }







   public function my_level_team_count($userid,$level=10){
        $arrin=array($userid);
        $ret=array();

        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[$i]=$arrin;
                $i++;


            }else{
                $arrin = array();
            }
        }

        $final = array();
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }


        return $final;

    }

}
