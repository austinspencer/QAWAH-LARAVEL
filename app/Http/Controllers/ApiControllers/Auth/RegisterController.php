<?php

namespace App\Http\Controllers\ApiControllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Users_Gallery_Images;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function add(request $request)
    {
        $BasicDetail = $request->except("step1.height","step1.location","step2.galleryImages","step2.profileImages","step3.isrealitePracticeKeeping","step3.selectedPassions","step3.selectedkingdomGiftsTags");
        $BasicDetail = array_merge($BasicDetail["step1"],$BasicDetail["step2"],$BasicDetail["step3"]); 
        $location =  $request->input("step1.location");
        $profileImages =  $request->input("step2.profileImages");
        $galleryImages =  $request->input("step2.galleryImages");
        $password = bcrypt($request->input("step1.password"));
        $BasicDetail["password"] = $password;
        $selectedPassions =  array();
        $selectedkingdomGiftsTags =  array();
        $isrealitePracticeKeeping = array();
        $resp = User::create($BasicDetail);
        foreach($request->input("step3.selectedPassions") as $sp)
        {
             array_push($selectedPassions,["options" => $sp]);
        }
        foreach($request->input("step3.selectedkingdomGiftsTags") as $kg)
        {
             array_push($selectedkingdomGiftsTags,["options" => $kg]);
        }
        foreach($request->input("step3.isrealitePracticeKeeping") as $irp)
        {
             array_push($isrealitePracticeKeeping,["options" => $irp]);
        }
        User::find($resp->id)->Location()->create($location);
        User::find($resp->id)->gallery_images()->createMany($galleryImages);
        User::find($resp->id)->profile_images()->createMany($profileImages);
        User::find($resp->id)->isrealitePracticeKeeping()->createMany($isrealitePracticeKeeping);
        User::find($resp->id)->kingdomGifts()->createMany($selectedkingdomGiftsTags);
        User::find($resp->id)->passions()->createMany($selectedPassions);
        $otp_detail[] = $this->send_users_mobile_verification_codes($resp->id);
        $otp_detail[] = $this->send_users_email_verification_codes($resp->id);
        return response()->json(['status' => true , 'message'=>'You have successfully created your profile.',"otp_detail" => $otp_detail]);
    }
    public function email_check(request $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        if ($user === null) {
          $array = ["status" => true , "message" => "available!"];
        }
        else
        {
          $array = ["status" => false , "message" => "not available!"];
        }
        return response()->json($array);
    }
}