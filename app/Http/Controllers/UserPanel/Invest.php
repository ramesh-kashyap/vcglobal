<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\Contract;
use App\Models\Income;
use App\Models\Wallet;
use App\Models\Fundtransfer;
use App\Models\Depositaddress;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Log;
use DB;
use Redirect;
use Hash;
use Helper;
class Invest extends Controller
{

  private $downline = "";

    public function index()
    {
        $user=Auth::user();
        $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();

        $this->data['last_package'] = ($invest_check)?$invest_check->amount:0;
        $this->data['page'] = 'user.invest.Deposit';
        return $this->dashboard_layout();
    }  
    
    
public function aibots(Request $request)
{

$user=Auth::user();
$this->data['page'] = 'user.invest.aibots';
return $this->dashboard_layout();

}


public function strategy(Request $request)
{

// $user=Auth::user();
$this->data['page'] = 'user.invest.strategy';
return $this->dashboard_layout();

}

public function mybots(Request $request)
{

  date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)

$user=Auth::user();
$balance= calStrategyBalance(auth::user()->id);
$time = Fundtransfer::where('u_id', $user->id)
                    ->where('t_to', 's-wal')
                    ->orderBy('t_time', 'ASC')
                    ->first();
                    $modifiedTime=null;
                    if ($time) {
                      $currentDateTime = $time->t_time;
                      $modifiedTime = date("M d, Y H:i:s", strtotime($currentDateTime . " +90 days"));

                      // $modifiedTime now holds the timestamp with one year added
                  }

                  $this->data['modifiedTime'] = $modifiedTime;

$this->data['balance'] = $balance;
$this->data['page'] = 'user.invest.mybots';
return $this->dashboard_layout();

}


public function depositstatus(Request $request)
{

  $user = Auth::user();
  $id = $user->id;
  $invests=Investment::where('user_id',$id)->get();

$this->data['invests'] = $invests;  
$this->data['page'] = 'user.invest.depositstatus';
return $this->dashboard_layout();

}


public function tradehistory(Request $request)
{

  $user = Auth::user();
  $id = $user->id;

  $limit = $request->limit ? $request->limit : paginationLimit();
  $status = $request->status ? $request->status : null;
  $search = $request->search ? $request->search : null;
  $notes = Contract::where('user_id',$user->id)->orderBy('c_id', 'DESC');
 if($search <> null && $request->reset!="Reset"){
  $notes = $notes->where(function($q) use($search){
    $q->Where('c_bot', 'LIKE', '%' . $search . '%')
    ->orWhere('trade', 'LIKE', '%' . $search . '%')
    ->orWhere('c_sell', 'LIKE', '%' . $search . '%')
    ->orWhere('c_time', 'LIKE', '%' . $search . '%')
    ->orWhere('profit', 'LIKE', '%' . $search . '%');
  });

}
  $notes = $notes->paginate($limit)
      ->appends([
          'limit' => $limit
      ]);
$this->data['search'] =$search;
$this->data['trades'] = $notes;  
$this->data['page'] = 'user.invest.tradehistory';
return $this->dashboard_layout();

}
             

public function w_details(Request $request)
{

$user=Auth::user();
$this->data['page'] = 'user.invest.withdrawalinfo';
return $this->dashboard_layout();

}


public function w_status(Request $request)
{

$user=Auth::user();
$this->data['page'] = 'user.invest.withdrawalstatus';
return $this->dashboard_layout();

}


    public function deposit()
    {
        $user=Auth::user();
        $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();

        $this->data['last_package'] = ($invest_check)?$invest_check->amount:0;
        $this->data['page'] = 'user.invest.Deposit2';
        return $this->dashboard_layout();
    }



public function cancel_payment($id)

{
    
         Investment::where('orderId',$id)->update(['status' => 'Decline']);
     
        $notify[] = ['success','Deposit canceled successfully'];
        return redirect()->route('user.invest')->withNotify($notify);
    
}

//     public function confirmDeposit(Request $request)
//     {

//    try{
//      $validation =  Validator::make($request->all(), [
//         'amount' => 'required|numeric|min:10000',
//         'network' => 'required',
//      ]);
   


//     //  dd($request->all());
//     if($validation->fails()) {
//         Log::info($validation->getMessageBag()->first());

//         return redirect()->route('home')->withErrors($validation->getMessageBag()->first())->withInput();
//     }




//     $user=Auth::user();
//     $invest_check=Investment::where('user_id',$user->id)->where('status','Pending')->first();

 
   
//   $amountTotal = $request->amount;
//   $paymentMode = $request->network;

//     // $invoice = substr(str_shuffle("0123456789"), 0, 7);
//     // $apiURL = 'https://plisio.net/api/v1/invoices/new';
//     //  $postInput = [
//     //  'source_currency' => 'USD',
//     //  'source_amount' => $amountTotal,
//     //  'order_number' => $invoice,
//     //  'currency' => $paymentMode,
//     //  'email' => $user->email,
//     //  'order_name' =>$user->username,
//     //  'callback_url' => 'https://mega-bot.co/dynamicupicallback?json=true',
//     //  'api_key' => 'REtmxKtJxa_ZGWmhIbx1SZ8yLDNjTmaNjxG1Sh6axgojnxM9yf29UHbmmtnM5Sld',
//     //  ];

//     //  $headers = [
//     //      'Content-Type' => 'application/json'
//     //  ];

//     //  $response = Http::withHeaders($headers)->get($apiURL, $postInput);

//     //  $statusCode = $response->status();
//     //  $resultAarray = json_decode($response->getBody(), true);
//     //     date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)

//     //     if($resultAarray['status']=="success")
//     //     {
    
//     //        $data = [
//     //             'plan' => 1,
//     //             'orderId' => $invoice,
//     //             'transaction_id' =>$resultAarray['data']['txn_id'],
//     //             'user_id' => $user->id,
//     //             'user_id_fk' => $user->username,
//     //             'amount' => $amountTotal,
//     //             'payment_mode' =>$paymentMode,
//     //             'status' => 'Pending',
//     //             'sdate' => Date("Y-m-d"),
//     //             'active_from' => $user->username,
//     //             'created_at' => date("Y-m-d H:i:s"),
//     //         ];
//     //         $payment =  Investment::insert($data);
                    
              
//     //     $this->data['address'] =$resultAarray['data']['wallet_hash'];
//     //     $this->data['network'] =$paymentMode;
//     //     $this->data['transaction_id'] =$resultAarray['data']['txn_id'];
//     //     $this->data['qr'] =$resultAarray['data']['qr_code'];
//     //     $this->data['orderId'] =$invoice;
//     //     $this->data['amount'] =$amountTotal;
//     //     $this->data['invoice_total_sum'] =$resultAarray['data']['invoice_total_sum'];
//         $this->data['page'] = 'user.invest.confirmDeposit';
//         return $this->dashboard_layout();
    
//       // }
//       // else
//       // {
//       //   return Redirect::back()->withErrors($resultAarray);
//       // }

//   }
//    catch(\Exception $e){
//     Log::info('error here');
//     Log::info($e->getMessage());
//     print_r($e->getMessage());
//     die("hi");
//     return  redirect()->route('user.dashboard')->withErrors('error', $e->getMessage())->withInput();
//       }

//  }



 public function confirmDeposit(Request $request)
{
    try {
        // ✅ Validation
        $validator = Validator::make($request->all(), [
            'amount'      => 'required|numeric|min:10000',
            'paymentMode' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ✅ Input values
        $amount = $request->amount;
        $paymentMode = $request->paymentMode;

        // ✅ Bank / Wallet details
        if ($paymentMode == "INR") {
            $walletAddress = null;
            $bankDetails = DB::table('general_settings')
                ->select('account_no', 'ifsc_code', 'branch_name', 'bank_name')
                ->first();
        } else {
            $walletAddress = DB::table('general_settings')->value('usdtBep20');
            $bankDetails = null;
        }

        // ✅ Data assign
        $this->data['amount']         = $amount;
        $this->data['wallet_address'] = $walletAddress;
        $this->data['bankDetails']    = $bankDetails;
        $this->data['paymentMode']    = $paymentMode;
        $this->data['page']           = 'user.invest.confirmDeposit';

        // ✅ Return layout
        return $this->dashboard_layout();

    } catch (Exception $e) {
        return redirect()
            ->route('user.dashboard')
            ->withErrors(['error' => $e->getMessage()])
            ->withInput();
    }
}




    public function fundActivation(Request $request)
    {

      // dd("hiii");
  try{
    $validation =  Validator::make($request->all(), [
        'amount' => 'required|numeric|min:10000',
        'paymentMode' => 'required',
        'utrno' => 'required',
    ]);

    if($validation->fails()) {
        Log::info($validation->getMessageBag()->first());

        return redirect()->route('home')->withErrors($validation->getMessageBag()->first())->withInput();
    }
 $user=Auth::user();
     $pendingRequest = Investment::where('user_id', $user->id)
                            ->where('status', 'Pending')
                            ->first();

        if ($pendingRequest) {
            // If already pending, send message
            $notify[] = ['error', 'Your request is already pending, please wait for approval.'];
            return redirect()->route('home')->withNotify($notify);
        }
           $data = [
                 'plan'=>1,
                 'orderId'=>mt_rand(1000000, 9999999),
                // 'transaction_id' =>$request->trans_id,
                'user_id' => $user->id,
                'user_id_fk' => $user->username,
                'amount' => $request->amount,
                'payment_mode' =>$request->paymentMode,
                'status' => 'Pending',
                'sdate' => Date("Y-m-d"),
                'active_from' => $user->username,
                'slip' => $request->utrno,
            ];
            $payment =  Investment::insert($data);
            
        
                add_direct_income($user->id, $request->amount);

        $notify[] = ['success','Deposit request submitted successfully'];
        return redirect()->route('home')->withNotify($notify);

   

  }
   catch(\Exception $e){
    Log::info('error here');
    Log::info($e->getMessage());
    print_r($e->getMessage());
    die("hi");
    return  redirect()->route('home')->withErrors('error', $e->getMessage())->withInput();
      }

 }





//  public function fundActivation(Request $request)
//   {
//     try {
//       // âœ… Validation
//       $validation = Validator::make($request->all(), [
//         'amount' => 'required|numeric',
//         'paymentMode' => 'required',
//         'utrno' => 'required',
//       ]);

//       if ($validation->fails()) {
//         Log::info($validation->getMessageBag()->first());
//         return redirect()
//           ->route('user.invest')
//           ->withErrors($validation->getMessageBag()->first())
//           ->withInput();
//       }

//       // âœ… Current logged-in user
//       $user = Auth::user();
//       $user_detail = User::where('username', $user->username)
//         ->orderBy('id', 'desc')
//         ->first();

//       // âœ… Latest investment check
//       $invest_check = BuyFund::where('user_id', $user_detail->id)
//         ->where('status', '!=', 'Decline')
//         ->orderBy('id', 'desc')
//         ->first();

//       $invoice = substr(str_shuffle("0123456789"), 0, 7);
//       $joining_amt = $request->amount;
//       $last_package = $invest_check ? $invest_check->amount : 0;

//       // âœ… Handle file upload
//       if ($request->hasFile('account')) {
//         $image = $request->file('account');
//         $imageName = time() . '_' . $image->getClientOriginalName();
//         $image->move(public_path('uploads/'), $imageName);
//       } else {
//         $imageName = null;
//       }

//       // âœ… Store in DB
//       $data = [
//         'utrno'         => $request->utrno,
//         'user_id'       => $user_detail->id,
//         'user_id_fk'    => $user_detail->username,
//         'amount'        => $request->amount,
//         'type'          => $request->paymentMode,
//         'status'        => 'Pending',
//         // 'payment_mode'  => $request->paymentMode, 
//         'slip'          => $imageName,
//         'sdate'         => date("Y-m-d"),
//       ];

//       BuyFund::insert($data);

//       // âœ… Success message
//       $notify[] = ['success', 'Your fund request has been submitted successfully'];
//       return redirect()->route('user.invest')->withNotify($notify);
//     } catch (\Exception $e) {
//       Log::info('error here');
//       Log::info($e->getMessage());
//       return redirect()
//         ->route('user.invest')
//         ->withErrors($e->getMessage())
//         ->withInput();
//     }
//   }















        public function invest_list(Request $request){

      $user=Auth::user();
      $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Investment::where('user_id',$user->id);
      if($search <> null && $request->reset!="Reset"){
        $notes = $notes->where(function($q) use($search){
          $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('txn_no', 'LIKE', '%' . $search . '%')
          ->orWhere('status', 'LIKE', '%' . $search . '%')
          ->orWhere('type', 'LIKE', '%' . $search . '%')
          ->orWhere('amount', 'LIKE', '%' . $search . '%');
        });

      }

        $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

      $this->data['search'] =$search;
      $this->data['deposit_list'] =$notes;
      $this->data['page'] = 'user.invest.DepositHistory';
      return $this->dashboard_layout();


        }
        public function my_deposit()
        {


          $this->data['page'] = 'user.invest.my_deposit';
          return $this->dashboard_layout();
        }
        

        public function open_deposit()
        {


          $this->data['page'] = 'user.invest.open_deposit';
          return $this->dashboard_layout();
        }
}
