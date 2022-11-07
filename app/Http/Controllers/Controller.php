<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function send_users_mobile_verification_codes($user_id)
    {
      return  User::find($user_id)->varrification_code()->create(["code" => rand(1000,9999),"type" => 1,"status" => 1,]);
    }
    public function send_users_email_verification_codes($user_id)
    {
       return User::find($user_id)->varrification_code()->create(["code" => rand(1000,9999),"type" => 2,"status" => 1,]);
    }
}
