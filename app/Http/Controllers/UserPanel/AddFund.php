<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyFund;
use App\Models\Fundtransfer;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Hexters\CoinPayment\CoinPayment;
use App\Models\CoinpaymentTransaction;
use Log;
use Redirect;
use DB;
class AddFund extends Controller
{

public function index(Request $request)
{

$user=Auth::user();
$this->data['page'] = 'user.fund.addFund';
return $this->dashboard_layout();

}


public function opxreleased(Request $request)
{

$user=Auth::user();
$this->data['page'] = 'user.fund.opxreleased';
return $this->dashboard_layout();

}


public function opxlocked(Request $request)
{

$user=Auth::user();
$this->data['page'] = 'user.fund.opxlocked';
return $this->dashboard_layout();

}


public function opxswap(Request $request)
{

$user=Auth::user();
$this->data['page'] = 'user.fund.opxswap';
return $this->dashboard_layout();

}

public function wallets(Request $request)
{
    $user = Auth::user();
    $id = $user->id;
    $limit = $request->limit ? $request->limit : 10;
       $status = $request->status ? $request->status : null;
       $search = $request->search ? $request->search : null;
       $notes = Fundtransfer::where('u_id',$user->id)->orderBY('t_id','DESC');      
      if($search <> null && $request->reset!="Reset"){
       $notes = $notes->where(function($q) use($search){
         $q->Where('transfered_id', 'LIKE', '%' . $search . '%')          
         ->orWhere('transfer_id', 'LIKE', '%' . $search . '%')
         ->orWhere('user_id_to', 'LIKE', '%' . $search . '%')
         ->orWhere('user_id_from', 'LIKE', '%' . $search . '%')
         ->orWhere('amount', 'LIKE', '%' . $search . '%');
       });
   
      }

       $notes = $notes->paginate($limit)
           ->appends([
               'limit' => $limit
           ]);

     $this->data['search'] =$search;
    // Pass the filtered transfers data to the view
    $this->data['transfers'] = $notes;
    $this->data['user'] = $user;
    $this->data['page'] = 'user.fund.wallets';

    // Return the dashboard layout with the data
    return $this->dashboard_layout();
}






public function SubmitBuyFund(Request $request)
{

  try{
        $validation =  Validator::make($request->all(), [
            'amount' => 'required|numeric|min:0',
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return redirect()->route('user.AddFund')->withErrors($validation->getMessageBag()->first())->withInput();
        }
        

           $user=Auth::user();
                   
           $transaction['order_id'] = uniqid(); // invoice number
            $transaction['amountTotal'] = (FLOAT) $request->amount;
            $transaction['note'] = 'Transaction note';
           $transaction['buyer_name'] = $user->username;
           $transaction['user_id'] = $user->id;
            $transaction['buyer_email'] = $user->email;
            $transaction['redirect_url'] = url('user/AddFund?res=success'); // When Transaction was comleted
            $transaction['cancel_url'] = url('user/AddFund'); // When user click cancel link

           /*
           *   @required true
           *   @example first item
           */
           $transaction['items'][] = [
             'itemDescription' => 'Cryptoversal',
             'itemPrice' => (FLOAT) $request->amount, // USD
             'itemQty' => (INT) 1,
             'itemSubtotalAmount' => (FLOAT) $request->amount // USD
           ];

           $transaction['payload'] = [
             'foo' => [
                 'bar' => 'baz'
             ]
           ];

                $url_ = CoinPayment::generatelink($transaction);

            return Redirect::to($url_);

      }
       catch(\Exception $e){
        Log::info('error here');
        Log::info($e->getMessage());
        print_r($e->getMessage());
        die("hi");
        return  redirect()->route('user.AddFund')->withErrors('error', $e->getMessage())->withInput();
    }

}

public function transferfund(Request $request)
{
    // Validate the form input
    $request->validate([
        'transfer_from' => 'required|numeric',
        'amount' => 'required|numeric|min:0',
        'transfer_to' => 'required|numeric',
    ]);

    $user = auth()->user();
    $balance=0;

    if($request->transfer_from==1){
      $balance=$user->fundingwallet();
    }   
    
      if($request->transfer_from==2){
        $balance=$user->referwallet();
      }  

      if($request->transfer_from==3){
        $balance=$user->profitwallet();
      }  

      if($request->transfer_from==4){
        $balance=$user->opxwallet();
      }      

      $netAmt=$request->amount;

     if($request->transfer_from==1 && $request->transfer_to==5)
        {
          $fees= botFees($user->id,$request->amount);
          $netAmt= ( $request->amount - (($fees/100)*($request->amount))      );
        }


    // Check if the amount to transfer is less than or equal to the balance
    if ($request->amount <= $balance) {
        // Create a new record in the fundtransfers table
        Fundtransfer::create([
            'user_id' => $user->id,
            'user_id_fk' => $user->username, // Assuming user_id_fk is also the current user's ID
            'wallet_to' => $request->transfer_to,
            'amt' => $request->amount,
            'net_amt' =>$netAmt,
            'charge'=>($request->amount- $netAmt ),
            'wallet_from' => $request->transfer_from,
            'before_bal' => $balance,
            'after_bal' => $balance - $request->amount,
        ]);

        // Update balances in the User model
        $f_bal=calFundingBalance(auth::user()->id);
        $s_bal=calStrategyBalance(auth::user()->id);
        $p_bal=calProfitBalance(auth::user()->id);
        $r_bal=calReferBalance(auth::user()->id);
        $o_bal=calOPXBalance(auth::user()->id);

        $user->update([
            'funding_wallet' => $f_bal,
            'strategy_wallet' => $s_bal,
            'profit_wallet' => $p_bal,
            'refer_wallet' => $r_bal,
            'opx_wallet' => $o_bal,

        ]);

        return redirect()->back()->with('success', 'Funds transferred successfully.');
    } else {
        return redirect()->back()->with('error', 'Insufficient balance.');
    }
}


public function transfer(Request $request)
{
    $userId = Auth::id(); // Assuming you are using Laravel's built-in authentication
    $p_amt = $request->input('amount');
    $t_from = $request->input('transfer_from');
    $t_to = $request->input('transfer_to');

    // Input validation
    $request->validate([
      'transfer_from' => 'required',
      'amount' => 'required|numeric|min:0',
      'transfer_to' => 'required',
    ]);

    // Fetch user data
    $user = Auth::user();

    $u_credits = $user->u_credits;
    $flag = true;
    $msg = false;

    if ($t_from == 'f-wal' && $t_to == 's-wal') {
        if ($p_amt > $u_credits) {
            $flag = false;
        } else {
            $u_strategy = $user->u_strategy;
            $idx0 = $this->getBotIndex($u_strategy);
            $fees0 = $this->getBotFees($idx0);
            $rounded0 = number_format($u_strategy * $fees0, 5, '.', '');

            $u_strategy += $p_amt;
            $idx = $this->getBotIndex($u_strategy);
            $fees = $this->getBotFees($idx);
            if ($idx == -1) {
                $updated_strategy = $user->u_strategy + $p_amt;
                $updated_balance = $u_credits - $p_amt;
            } else {
                $updated_balance = $u_credits - $p_amt;
                $rounded = number_format($p_amt * $fees, 5, '.', '');
                if ($idx != $idx0) {
                    $rounded = number_format(($p_amt + $user->u_strategy) * $fees, 5, '.', '') - $rounded0;
                }
                $updated_strategy = $user->u_strategy + ($p_amt - ($rounded));
                DB::table('transfer')->insert([
                    't_amt' => $rounded,
                    't_from' => $t_from,
                    't_to' => 'bot',
                    't_new' => $updated_balance,
                    'u_id' => $userId,
                ]);
            }
            $updateResult = DB::table('users')
                ->where('id', $userId)
                ->update([
                    'u_credits' => $updated_balance,
                    'u_strategy' => $updated_strategy,
                ]);
            if (!$updateResult) {
                $flag = false;
            }
        }
    } elseif ($t_from == 'p-wal' && $t_to == 'f-wal') {
        if ($p_amt > $user->u_profit) {
            $flag = false;
        } else {
            $updated_balance = $u_credits + $p_amt;
            $updated_profit = $user->u_profit - $p_amt;
            $updateResult = DB::table('users')
                ->where('id', $userId)
                ->update([
                    'u_credits' => $updated_balance,
                    'u_profit' => $updated_profit,
                ]);
            if (!$updateResult) {
                $flag = false;
            }
        }
    } elseif ($t_from == 'o-wal' && $t_to == 'f-wal') {
        if ($p_amt > $user->u_opt) {
            $flag = false;
        } else {
            $updated_balance = $u_credits + $p_amt;
            $updated_opt = $user->u_opt - $p_amt;
            $updateResult = DB::table('users')
                ->where('id', $userId)
                ->update([
                    'u_credits' => $updated_balance,
                    'u_opt' => $updated_opt,
                ]);
            if (!$updateResult) {
                $flag = false;
            }
        }
    } elseif ($t_from == 'r-wal' && $t_to == 'f-wal') {
        if ($p_amt > $user->u_ref) {
            $flag = false;
        } else {
            $updated_balance = $u_credits + $p_amt;
            $updated_ref = $user->u_ref - $p_amt;
            $updateResult = DB::table('users')
                ->where('id', $userId)
                ->update([
                    'u_credits' => $updated_balance,
                    'u_ref' => $updated_ref,
                ]);
            if (!$updateResult) {
                $flag = false;
            }
        }
    } elseif ($t_from == 'f-wal' && $t_to == 'o-wal') {
        if ($p_amt > $user->u_credits) {
            $flag = false;
        } else {
            $updated_balance = $u_credits - $p_amt;
            $updated_opt = $user->u_opt + $p_amt;
            if ($updated_balance < 0) {
                return Redirect::back()->withErrors('Invalid amount.');

            }
            $updateResult = DB::table('users')
                ->where('id', $userId)
                ->update([
                    'u_credits' => $updated_balance,
                    'u_opt' => $updated_opt,
                ]);
            if (!$updateResult) {
                $flag = false;
            }
        }
    } elseif ($t_from == 'p-wal' && $t_to == 's-wal') {
        $msg = true;
    } else {
        $flag = false;
    }

    if ($msg) {
        return Redirect::back()->withErrors('Transfer failed');
    } elseif (!$flag) {
      return Redirect::back()->withErrors('Transfer failed');
    } else {
        $currentDateTime = now();
        DB::table('transfer')->insert([
            't_amt' => $p_amt,
            't_from' => $t_from,
            't_to' => $t_to,
            't_new' => $updated_balance,
            'u_id' => $userId,
            't_time' => $currentDateTime,
        ]);
        $notify[] = ['success', 'Transfer successful.'];
            return redirect()->back()->withNotify($notify);
    }
}

    private function getBotIndex($u_strategy)
    {
        if ($u_strategy >= 50 && $u_strategy <= 499) {
            return 1;
        } elseif ($u_strategy >= 500 && $u_strategy <= 1999) {
            return 2;
        } elseif ($u_strategy >= 2000 && $u_strategy <= 4999) {
            return 3;
        } elseif ($u_strategy >= 5000) {
            return 4;
        }
        return -1;
    }

    private function getBotFees($index)
    {
        $bot = DB::table('machines')->where('m_id', $index)->first();
        return $bot ? $bot->Fees / 100 : 0;
    }



}
