<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Carbon\Carbon;
use Log;
use Hash;
class Register extends Controller
{

    public function getUserNameAjax(Request $request)
    {

      $user =User::where('username',$request->user_id)->first();
            if($user)
            {
                return $user->name;
            } 
            else{
                return 1;
            }       
    }

    public function index()
    {
        return view('auth.verify');
    }


   public function find_position($snode,$pos)
    {
        $q=User::select('id')->where('Parentid',$snode)->where('position',$pos)->first();
        if (empty($q))
         {
           $this->downline = $snode; 
         }
         else
         {
          $user = $q->id;
            // print_r($user);die();
          $this->find_position($user,$pos);   
         }
    }


  public function register(Request $request)
    {

        // try{
            $validation =  Validator::make($request->all(), [
                'email' => 'required|unique:users,email',
                'name' => 'required',
                'password' => 'required|min:5',
                'sponsor' => 'required|exists:users,username',
              
            ]);
            
            if($validation->fails()) {

                Log::info($validation->getMessageBag()->first());
            
                return response()->json(['error' => $validation->getMessageBag()->first()], 200);
             
            }
            //check if email exist
          
          
          
            
           
          
        //     $data['name'] = $post_array['name'];
        //     $data['phone'] = $post_array['phone'];
        //     $data['country'] = $post_array['country'];
        //     $data['username'] = $username;
        //     $data['email'] = $post_array['email'];
        //     $data['password'] =   Hash::make($post_array['password']);
        //     $data['tpassword'] =   Hash::make($tpassword);
        //     $data['PSR'] =  $post_array['password'];
           
        //     $data['TPSR'] =  $tpassword;
        //     $data['sponsor'] = $user->id;
        //     $data['package'] = 0;
        //     $data['jdate'] = date('Y-m-d');
        //     $data['created_at'] = Carbon::now();
        //     $data['remember_token'] = substr(rand(),-7).substr(time(),-5).substr(mt_rand(),-4);
        //     $sponsor_user =  User::orderBy('id','desc')->limit(1)->first();
        //    $data['level'] = $user->level+1;

         
        //     $data['ParentId'] =  $sponsor_user->id;
        //     $user_data =  User::create($data);
        //     $registered_user_id = $user_data['id'];
        //     $user = User::find($registered_user_id);
        //     Auth::loginUsingId($registered_user_id);
        $code = verificationCode(6);

        PasswordReset::where('email', $request->email)->delete();

        $password = new PasswordReset();
        $password->email = $request->email;
        $password->token = $code;
        $password->created_at = \Carbon\Carbon::now();
        $password->save();

          
             sendEmail($request->email, 'Welcome to '.siteName(), [
                'name' => $request->name,
                'code' => $code,
                'viewpage' => 'one_time_password',
                 
            ]); 
            
            

            return response()->json(['success' => 'OTP Send Successfully.'], 200);
            //  return redirect()->route('register_sucess')->with('messages', $user);

        // }
        // catch(\Exception $e){
        //     Log::info('error here');
        //     Log::info($e->getMessage());
        //     print_r($e->getMessage());
        //     die("hi");
        //     return back()->withErrors('error', $e->getMessage())->withInput();
           
        // }

          
    } 
    

    public function otp(Request $request)
    {
        try{
            $validation =  Validator::make($request->all(), [
                'email' => 'required|unique:users,email',
                'name' => 'required',
                'password' => 'required|min:5',
                'sponsor' => 'required|exists:users,username',
                'otp' => 'required|numeric'
              
            ]);

            
            if($validation->fails()) {

                Log::info($validation->getMessageBag()->first());
     
                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }
            //check if email exist
            $code=$request->otp;
            if (PasswordReset::where('token', $code)->where('email', $request->email)->count() != 1) {
                return Redirect::back()->withErrors(['otp' => 'Invalid OTP. Please try again.']);
            }

                $totalID = User::count();
                $totalID++;
                $username = substr(time(), 6) . $totalID;
                $user=User::where('username',$request->sponsor)->first();
             
                $data['name'] = $request->name;
                $data['username'] = $username;
                $data['email'] = $request->email;
                $data['password'] =   Hash::make($request->password);
                $data['tpassword'] =   Hash::make($username);
                $data['tpassword'] =   Hash::make($request->password);
                $data['PSR'] =  $request->password;
                $data['TPSR'] =  $request->password;
                $data['sponsor'] = $user->id;
                $data['package'] = 0;
                $data['jdate'] = date('Y-m-d');
                $data['created_at'] = Carbon::now();
                $data['remember_token'] = substr(rand(),-7).substr(time(),-5).substr(mt_rand(),-4);
                $sponsor_user =  User::orderBy('id','desc')->limit(1)->first();
               $data['level'] = $user->level+1;
    
             
                $data['ParentId'] =  $sponsor_user->id;
                $user_data =  User::create($data);
          
                     sendEmail($request->email, 'Welcome to '.siteName(), [
                        'name' => $request->name,
                        'username' => $username,
                        'password' => $request->password,
                        'viewpage' => 'register_sucess',
                    ]);
            
          
            

            
        
            
            $notify[] = ['success', 'Account Created Successfully !!'];
            // return redirect()->route('home');
             return redirect()->route('login')->withNotify($notify);

        }
        catch(\Exception $e){
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die("hi");
            return back()->withErrors('error', $e->getMessage())->withInput();
           
        }

          
    } 

}
