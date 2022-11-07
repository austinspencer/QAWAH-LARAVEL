<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use Omnipay\Omnipay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Carbon\Carbon;
use App\user_addons_subscriptions;

class SubcribtionsController extends Controller
{
    //

    public $gateway;
    public $completePaymentUrl;
 
    public function __construct()
    {
        $this->gateway = Omnipay::create('Stripe\PaymentIntents');
        $this->gateway->setApiKey("sk_test_51JIdZVJehHGbCsaCtO53jxO0sNp5ENohIDu08KlDU7Xh5AroEdegLfy0bnjOd3rtfsAhJA19TiE2mEspXsFwGjdr00lF3TxhRG");
        // $this->completePaymentUrl = url('confirm');
    }
    public function buy_packages(request $request)
    {
        
        if($request->stripe_token)
        {
            $package = $request->all();
            $User = Auth::user();
            $token = $request->stripe_token;
            $response = $this->gateway->authorize([
                'amount' => $request->price,
                'currency' =>"USD",
                'description' => $request->type . " " . $request->title,
                'token' => $token["token"]["id"],
                'returnUrl' => "http://localhost:8080/",
                'confirm' => true,
            ])->send();
            if($response->isSuccessful())
            {
                $response = $this->gateway->capture([
                    'amount' => $request->price,
                    'currency' => 'USD',
                    'paymentIntentReference' => $response->getPaymentIntentReference(),
                ])->send();
                $arr_payment_data = $response->getData();
                $response = $this->gateway->authorize([
                    'amount' => $request->price,
                    'currency' =>"USD",
                    'description' => $request->type . " " . $request->title,
                    'token' => $token["token"]["id"],
                    'returnUrl' => "http://localhost:8080/",
                    'confirm' => true,
                ])->send();
                $this->create_payment($package,$User,$arr_payment_data);
                $this->create_subscriptions($User,$package);
                $resp =  array("status" => true , "message" => "payment successfully complete" , "response" => $arr_payment_data);
                return response()->json($resp,200);
            }
            else
            {
                $resp =  array("status" => false , "message" => $response->getMessage());
                return response()->json($resp,200);
            }
        }
        else
        {
            $response =  array("status" => false , "message" => "somthing went wrong","post_data" => $request->all());
            return response()->json($response,200);
        }
    }
    private function create_payment($package,$user,$arr_payment_data)
    {
        $response = User::find($user->id)->User_payments()->create(
            array(
                "pkg_id" => $package["id"],
                "payment_id" => $arr_payment_data['id'],
                "currency" => 'USD',
                "amount" =>  $arr_payment_data['amount']/100,
                "payment_status" => $arr_payment_data['status'],
            )  
        );
        return $response;
    }
    private function create_subscriptions($user,$package)
    {
        $date = Carbon::now();
        $start_date = Carbon::now();
        $pkg_addons = json_decode($package["options"]);
        $expire_date = $date->addmonths($package["duration"]);
        $response = User::find($user->id)->user_subcribtion()->create(
            array(
                "pkg_id" => $package["id"],
                "pkg_name" => $package["title"],
                "pkg_catogery" => $package["packages_categery"]["title"],
                "spotlights" => $package["spotlights"],
                "lovenotes" => $package["lovenotes"],
                "staring" =>  $start_date,
                "ending" => $expire_date,
                "status" => 1
            )
        );
        if(!empty($response)){
            if(!empty($pkg_addons)){
                foreach($pkg_addons as $pkg)
                {
                $addon_repsonse[] = user_addons_subscriptions::create(
                    array(
                            "subscribe_id" => $response->id,
                            "addon_name" => $pkg,
                            "status" => true
                        )
                );
                }
            }
        }
        return array($user,$response);
    }
}
