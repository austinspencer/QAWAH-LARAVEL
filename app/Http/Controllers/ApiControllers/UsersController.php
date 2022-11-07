<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{

    //
    public function get_user_profile()
    {
        $user_id =  Auth::user()->id;
        $user = User::with("subscription","profile_images","gallery_images","isrealitePracticeKeeping","kingdomGifts","passions")
        ->find($user_id);      
        return response()->json($user,200);
    }
    
    public function get_profile_detail(request $request)
    {
        $user = User::with("useractions","Location","subscription","profile_images","gallery_images","isrealitePracticeKeeping","kingdomGifts","passions")
        // ->wherehas('useractions_by_auth_user', function ($query) {
        // //   $query->where('user_id','=',$request->targetUid);
        // })
        ->where("id",$request->targetUid)->first();
        return response()->json(["success" => true ,"user_detail" => $user,"request" => $request->all(),"message" => "retrived user"], 200);
    }
    

    public function logout(request $request)
    {
        $token = $request->user()->token();
        $token->revoke();
        return response()->json([
            'status' => true,
            'msg' => 'Logged out Successfull.',
         ], 200);
    }


}
