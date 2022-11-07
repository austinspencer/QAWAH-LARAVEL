<?php

namespace App\Http\Controllers\ApiControllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use App\users_verification_codes;
use App\User;
use Illuminate\Support\Facades\Auth;
use Builder;
class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    //use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('signed')->only('verify');
        // $this->middleware('throttle:6,1')->only('verify', 'resend');
    }




    public function sendsms()
    {
      
      //   $receiverNumber = "03138506039";
      //   $message = "This is testing from qavah.com";
      //   try {
      //       $account_sid = getenv("TWILIO_SID");
      //       $auth_token = getenv("TWILIO_TOKEN");
      //       $twilio_number = getenv("TWILIO_FROM");
      //       $client = new Client($account_sid, $auth_token);
      //       $client->messages->create($receiverNumber, [
      //           'from' => $twilio_number, 
      //           'body' => $message]);
  
      //       dd('SMS Sent Successfully.');
  
      //   } 
      //   catch (Exception $e) {
      //       dd("Error: ". $e->getMessage());
      //   }
    }
    public function send_email(request $request)
    {
      $user = Auth::user();
      $details = [
         'title' => 'Mail from Qavah.com',
         'body' => 'This is for testing email using smtp'
      ];
      \Mail::to('tahirsandh78628@gmail.com')->send(new \App\Mail\email_template($details));
      
      dd("Email is Sent.");
         return response()->json(["status" => true,"message" => "Email OTP Send","user" =>  $user], 200);
    }







    public function verify_otp(request $request)
    {   
     $user_id = $request->user()->id;
     $verification = users_verification_codes::where("user_id",$user_id)
     ->where("type",1)
     ->where("status",1)
     ->where("code",$request->otp)
     ->first();
     if(!empty($verification))
     {
        $user_status_update = User::where("id",$user_id)->update(["mobile_verified" => 1]);
        $code_status = users_verification_codes::where("id",$verification->id)->update(["status" => 0]);
        $resp = array("status" =>  true , "message" => "exist" ,"update_status" => $code_status , "verification" => $verification);
    }
      else
      {
         $resp = array("status" =>  false , "message" => "not exist");
      }
      return response()->json($resp,200);
    }
    public function email_verify_otp(request $request)
    {   
     $user_id = $request->user()->id;
     $verification = users_verification_codes::where("user_id",$user_id)
     ->where("type",2)
     ->where("status",1)
     ->where("code",$request->otp)
     ->first();
     if(!empty($verification))
     {
        $user_status_update = User::where("id",$user_id)->update(["email_verified" => 1]);
        $code_status = users_verification_codes::where("id",$verification->id)->update(["status" => 0]);
        $resp = array("status" =>  true , "message" => "exist" ,"update_status" => $code_status ,"user" => $user_status_update , "verification" => $verification);
     }
     else
     {
        $resp = array("status" =>  false , "message" => "not exist");
     }
     return response()->json($resp,200);
    }



    
}
