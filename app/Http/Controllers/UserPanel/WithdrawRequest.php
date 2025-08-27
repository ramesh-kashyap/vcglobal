<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\Bank;
use App\Models\Withdraw;
use App\Models\Walletwithdraw;
use App\Models\Deactivate;
use App\Models\Fundtransfer;
use App\Models\PasswordReset;
use App\Models\Debit;
use Hexters\CoinPayment\CoinPayment;
use App\Models\CoinpaymentTransaction;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Log;
use Redirect;
use Hash;

class WithdrawRequest extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $bank = Bank::where('user_id',$user->id)->orderBy('id','desc')->get();
        $this->data['bank'] = $bank;
        $this->data['page'] = 'user.withdraw.WithdrawRequest';
        return $this->dashboard_layout();
    }

       
public function w_details(Request $request)
{

   
$this->data['page'] = 'user.withdraw.withdrawalinfo';
return $this->dashboard_layout();

}


public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'wallet_address' => 'required|string|max:255',
            'withdraw_method' => 'required|string|in:btc,bnb,eth,trx,usdt_trc20,usdt_bep20',
        ]);

        // Create a new Walletwithdraw model instance and store the data
        $matchThese =[
            'user_id' => auth()->id(),
            'user_id_fk' => auth()->user()->username,
            'wallet_address' => $validatedData['wallet_address'],
            'withdraw_method' => $validatedData['withdraw_method'],
        ];
        
        Walletwithdraw::updateOrCreate($matchThese,['user_id'=>auth()->id(),'withdraw_method'=>$validatedData['withdraw_method']]);

        // Redirect back or to a success page
        $notify[] = ['success','Withdraw details submitted successfully'];
        return redirect()->back()->withNotify($notify);
    }
   
    public function deactivate1(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'amt' => 'required',
            'net_amt' => 'required',
        ]);

        //  dd($validatedData['amt']);
        $bal=calStrategyBalance(auth::user()->id);

        if($request->amt > $bal){
            return redirect()->back()->with('error', 'Insufficient funds in strategy wallet.');

        }

        $charge=(($request->amt)-($request->net_amt));
        // Create a new Walletwithdraw model instance and store the data
        Deactivate::create([
            'user_id' => auth()->id(),
            'charge' =>  $charge,
            'amt' => $validatedData['amt'],
            'net_amt' => $validatedData['net_amt'],
        ]);

        $f_bal=calFundingBalance(auth::user()->id);
        $s_bal=calStrategyBalance(auth::user()->id);
 
       $user=auth::user();

        $user->update([
            'funding_wallet' => $f_bal,
            'strategy_wallet' => $s_bal,
        ]);

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Withdraw details submitted successfully.');
    }
    

    public function deactivate()
    {
        $u_id = Auth::id();

        $miner = User::where('id', $u_id)->first();
        if (!$miner) {
            return redirect()->route('user.dashboard')->withErrors(array('Miner not found'));
        }

        $u_credits = $miner->u_credits;
        $u_str = $miner->u_strategy;

        if ($u_str<=0) 
        {
            return redirect()->back()->withErrors(array('Insufficient fund'));
        }

        $rounded = number_format(($u_str * 0.25), 5, '.', '');
        $amount = $u_str - $rounded;
        $updated_s = 0;
        $updated_balance = $u_credits + $amount;

        \DB::transaction(function () use ($miner, $amount, $rounded, $updated_balance, $u_id) {
            $miner->update([
                'u_credits' => $updated_balance,
                'u_strategy' => 0,
            ]);
            $currentDateTime = now();
            Fundtransfer::create([
                't_amt' => $amount,
                't_from' => 's-wal',
                't_to' => 'f-wal',
                't_new' => $updated_balance,
                'u_id' => $u_id,
                't_time' => $currentDateTime,
            ]);
            Fundtransfer::create([
                't_amt' => $rounded,
                't_from' => 's-wal',
                't_to' => 'deact',
                't_new' => $updated_balance,
                'u_id' => $u_id,
                't_time' => $currentDateTime,
            ]);
        });

        $notify[] = ['success','Transfer successful'];
        return redirect()->back()->withNotify($notify);
    }


public function w_status(Request $request)
{

  $user = Auth::user();
  $id = $user->id;
  $withdraws=Withdraw::where('user_id',$id)->get();

$this->data['withdraws'] = $withdraws;
$this->data['page'] = 'user.withdraw.withdrawalstatus';
return $this->dashboard_layout();

}

    public function withdrawPrinciple()
    {
        $user=Auth::user();
        $bank = Bank::where('user_id',$user->id)->orderBy('id','desc')->get();
        $this->data['bank'] = $bank;
        $this->data['page'] = 'user.withdraw.withdraw-principle';
        return $this->dashboard_layout();
    }
     
    public function submit(Request $request)
    {
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'withdraw_amount' => 'required|numeric|min:50',
                'network' => 'required|in:btc,bnb,eth,trx,usdt_trc20,usdt_bep20',
            ]);

            
            // dd($request->all());
            $amt=$request->withdraw_amount;
            $userNetwork = $request->network; 

            $user=auth::user();
            $userId=$user->id;

            $balance=calFundingBalance($userId);

            if($amt>$balance){
                return redirect()->route('home')->withErrors(array('Insufficient Balance in Funding Wallet!'));

            }

            if (!WalletWithdraw::where('user_id', $userId)->where('withdraw_method', $userNetwork)->exists()) {
              return Redirect::back()->withErrors(array('The selected network is not available for withdrawal.'));    
            }

            $wallet=WalletWithdraw::where('user_id', $userId)->where('withdraw_method', $userNetwork)->orderBy('id','DESC')->first();
            $walletaddress=$wallet->wallet_address;

            $userIpInfo = getIpInfo();
           $userBrowserInfo =osBrowser();
           $code = verificationCode(6);
           $user=auth::user();
            PasswordReset::where('email', $user->email)->delete();

            $password = new PasswordReset();
            $password->email = $user->email;
            $password->token = $code;
            $password->created_at = \Carbon\Carbon::now();
            $password->save();

               sendEmail($user->email, 'Withdrawal Request!!!', [
                'name' => $user->name,
                
                'code' => $code,
                'viewpage' => 'one_time_password',

             ]);
            $this->data['walletaddress'] = $walletaddress;
            $this->data['amt'] = $amt;
            $this->data['add'] = $userNetwork;
            $this->data['time'] = $password->created_at;
            $this->data['page'] = 'user.withdraw.confirmwithdraw';
            return $this->dashboard_layout();
            
        } catch (Exception $e) {
            // Log the error or handle it as needed
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die("hi");
            return  redirect()->route('user.WithdrawRequest')->withErrors('error', $e->getMessage())->withInput();
               }
    }

    
    

    public function WithdrawRequest(Request $request)
    {

        try{

             $validation =  Validator::make($request->all(), [
            'amount' => 'required|numeric|min:10',
            'code' => 'required',    
            'withdraw_method' => 'required',


        ]);


        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return redirect()->route('home')->withErrors($validation->getMessageBag()->first())->withInput();
        }

        $user=Auth::user();
        $password= $request->transaction_password;
        $balance=calFundingBalance($user->id);  
       
        if ($balance>=$request->amount)
        {
         $todayWitdrw=Withdraw::where('user_id',$user->id)->where('status','!=','Failed')->where('wdate',date('Y-m-d'))->first();
         
         if($todayWitdrw)
         {
          return redirect()->route('home')->withErrors(array('Any Withdraw limit per Id once a day !'));    
         }

         $withdraw_method = $request->withdraw_method;

         if ($withdraw_method=="USDT-TRC20") 
         {
           $account = $user->usdtTrc20;
         }
         else
         {
            $account = $user->usdtBep20; 
         }


         if(empty($account))
         {
           return redirect()->route('home')->withErrors(array('Update Your Wallet Address !'));
         }
         
         $user_detail=Withdraw::where('user_id',$user->id)->where('status','Pending')->first();

         if(!empty($user_detail))
         {
           return redirect()->route('home')->withErrors(array('Withdraw Request Already Exist !'));
         }
         else
         {
          $code = $request->code;
          $userData = User::where('id', $user->id)->first();
  
          if (PasswordReset::where('token', $code)->where('email', $userData->email)->count() != 1) {
              $notify[] = ['error', 'Invalid token'];
              return redirect()->route('home')->withNotify($notify);
          }

          
                 $data = [
                        'txn_id' =>md5(time() . rand()),     
                        'user_id' => $user->id,
                        'user_id_fk' => $user->username,
                        'amount' => $request->amount,
                        'account' => $account,
                        'payment_mode' =>$request->withdraw_method,
                        'status' => 'Pending',
                        'walletType' => 1,
                        'wdate' => Date("Y-m-d"),
                    ];
                   $payment =  Withdraw::Create($data);

                   $f_bal=calFundingBalance(auth::user()->id);
                   $updated_balance = $f_bal - $request->amount;
                   $user->update([
                       'u_credits' => $updated_balance,
                   ]);
                $notify[] = ['success','Withdraw Request Submited successfully'];
                return redirect()->route('home')->withNotify($notify);
             

         }

        }
        else
        {
          return redirect()->route('home')->withErrors(array('Insufficient balance in Your account'));
        }

    }
    catch(\Exception $e){
     Log::info('error here');
     Log::info($e->getMessage());
     print_r($e->getMessage());
     die("hi");
     return  redirect()->route('user.WithdrawRequest')->withErrors('error', $e->getMessage())->withInput();
       }




    }



    public function WithdrawRequestPrinciple(Request $request)
    {

        try{

             $validation =  Validator::make($request->all(), [
            'amount' => 'required|numeric|min:20',
            'paymentMode' => 'required',    
            'transaction_password' => 'required',
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
        }

        $user=Auth::user();
        $password= $request->transaction_password;
        $balance=Auth::user()->principleBalance();
        $account =  $user->trx_addres;
        if ($balance>=$request->amount)
        {
            
        $todayWitdrw=Withdraw::where('user_id',$user->id)->where('wdate',date('Y-m-d'))->first();
         
         if($todayWitdrw)
         {
          return Redirect::back()->withErrors(array('Any Withdraw limit per Id once a day !'));    
         }
         
         
          $todayWitdrwSUm=Withdraw::where('user_id',$user->id)->where('wdate',date('Y-m-d'))->first();
         $todayWitdrwSUm=$todayWitdrwSUm+$request->amount;
         if($todayWitdrwSUm>=500)
         {
          return Redirect::back()->withErrors(array('Any Withdraw limit per 500$ once a day !'));    
         }
         
         
         $user_detail=Withdraw::where('user_id',$user->id)->where('status','Pending')->first();

         if(!empty($user_detail))
         {
           return Redirect::back()->withErrors(array('Withdraw Request Already Exist !'));
         }
         else
         {
         
          if(!empty($account))
              {
              if (Hash::check($password, $user->tpassword))
               {
             
                   $data = [
                        'txn_id' =>md5(time() . rand()),     
                        'user_id' => $user->id,
                        'user_id_fk' => $user->username,
                        'amount' => $request->amount,
                        'account' => $account,
                        'payment_mode' =>$request->paymentMode,
                        'status' => 'Pending',
                        'walletType' => 2,
                        'wdate' => Date("Y-m-d"),
                    
                        
                    ];
                   $payment =  Withdraw::Create($data);
                     $withdralId = $payment['id'];
                     $package = $user->package-$request->amount;
                     User::where('id',$user->id)->update(['package' => $package]);
                    
            $notify[] = ['success','Withdraw Request Submited successfully'];
    
               return redirect()->back()->with('withdralId',$withdralId)->withNotify($notify);
                   
             
               
              }
                else
                {
                return Redirect::back()->withErrors(array('Invalid Transaction Password'));
                }     
                
              }
              else
                {
                return Redirect::back()->withErrors(array('Please Update Your USDT Payment Address Or Bank Details'));
                }  
         }

        }
        else
        {
     return Redirect::back()->withErrors(array('Insufficient balance in Your account'));
        }

    }
    catch(\Exception $e){
     Log::info('error here');
     Log::info($e->getMessage());
     print_r($e->getMessage());
     die("hi");
     return  redirect()->route('user.WithdrawRequest')->withErrors('error', $e->getMessage())->withInput();
       }




    }


    public function WithdrawHistory(Request $request){

        $user=Auth::user();
        $limit = $request->limit ? $request->limit : paginationLimit();
         $status = $request->status ? $request->status : null;
         $search = $request->search ? $request->search : null;
         $notes = Withdraw::where('user_id',$user->id)->orderBy('wdate','DESC');
        if($search <> null && $request->reset!="Reset"){
         $notes = $notes->where(function($q) use($search){
            $q->Where('wdate', 'LIKE', '%' . $search . '%')
              ->orWhere('amount', 'LIKE', '%' . $search . '%')
              ->orWhere('status', 'LIKE', '%' . $search . '%')
              ->orWhere('txn_id', 'LIKE', '%' . $search . '%');
         });

        }

         $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

       $this->data['search'] =$search;
       $this->data['withdraw_report'] =$notes;
       $this->data['page'] = 'user.withdraw.WithdrawHistory';
       return $this->dashboard_layout();
    } 
    
    public function debitReport(Request $request){

        $user=Auth::user();
        $limit = $request->limit ? $request->limit : paginationLimit();
         $status = $request->status ? $request->status : null;
         $search = $request->search ? $request->search : null;
         $notes = Debit::where('user_id',$user->id);
        if($search <> null && $request->reset!="Reset"){
         $notes = $notes->where(function($q) use($search){
            $q->Where('wdate', 'LIKE', '%' . $search . '%')
              ->orWhere('amount', 'LIKE', '%' . $search . '%')
              ->orWhere('status', 'LIKE', '%' . $search . '%')
              ->orWhere('txn_id', 'LIKE', '%' . $search . '%');
         });

        }

         $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

       $this->data['search'] =$search;
       $this->data['withdraw_report'] =$notes;
       $this->data['page'] = 'user.withdraw.debit';
       return $this->dashboard_layout();
    }
}
