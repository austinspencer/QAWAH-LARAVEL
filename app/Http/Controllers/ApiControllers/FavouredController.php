<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\UserAction;

use Illuminate\Support\Facades\Auth;

class FavouredController extends Controller
{
    //
    public function who_likes_me()
    {
        //$peoples = USer::with("who_like_me_users")->where("match_id",Auth::id())->get()->pluck('who_like_me_users');
        $peoples =  User::with("useractions_by_auth_user","profile_images")
        ->wherehas('useractions_by_auth_user', function ($query) {
            $query->where('match_id','=',Auth::id())->where('matched','=',false);
        })
        ->where('id', '!=', Auth::id())
        ->get() ;
        return response()->json(["success" => true , "message" => "retrived user","peoples" => $peoples], 200);
    }
    public function whi_i_like()
    {
         $peoples =  User::with("useractions","profile_images")
        ->wherehas('useractions', function ($query) {
            $query->where('user_id','=',Auth::id());
        })
        ->where('id', '!=', Auth::id())
        ->get() ;
        return response()->json(["success" => true , "message" => "retrived user","peoples" => $peoples], 200);
    }
    public function matched_users()
    {

        $peoples = [];
        //  $peoples =  User::with("useractions","profile_images")
        // ->wherehas('useractions', function ($query) {
        //     $query->where('user_id','=',Auth::id())->where("matched","=",false);
        // })
        // ->where('id', '!=', Auth::id())
        // ->get() ;
        return response()->json(["success" => true , "message" => "retrived user","peoples" => $peoples], 200);
    }

    


}
