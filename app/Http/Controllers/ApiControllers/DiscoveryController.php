<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\UserAction;
use Illuminate\Support\Facades\Auth;
class DiscoveryController extends Controller
{
    //
    public function get_peoples(request $request)
    {
      $peoples =  User::with("useractions","Location","gallery_images","profile_images","isrealitePracticeKeeping","kingdomGifts","passions")
      ->whereDoesntHave('useractions', function ($query) {
          $query->where('user_id','=',Auth::id());
         })
       ->whereDoesntHave('useractions_by_auth_user', function ($query) {
          $query->where('match_id','=',Auth::id());
        })

      ->where('id', '!=', Auth::id())
      ->where('mobile_verified', '=', true)
      ->where('email_verified', '=', true)
      ->get() ;
      return response()->json(["status" => true ,"peoples" => $peoples],200);
    }

    public function liked(request $request)
    {
      $r1 = UserAction::where("user_id","=",$request->myUid)
      ->where("match_id","=",$request->targetsUid)
      ->where("matched","=",false)
      ->first();
      $r2 = UserAction::where("match_id","=",$request->myUid)
      ->where("user_id","=",$request->targetsUid)
      ->where("matched","=",false)
      ->first();
      if(empty($r1) && empty($r2)){
        $reponse = User::find(Auth::id())->useractions_by_auth_user()->create(
          [
              "match_id" => $request->targetsUid,
              "disliked" => false,
              "liked" => true,
              "fancy" => false,
              "superlike" => false,
              "matched" => false,
              "is_blocked" => false,
              "report_detail_id" => 0,
          ]
        );
      }
      else
      {
        $reponse = User::find(Auth::id())->useractions_by_auth_user()->create(
          [
              "match_id" => $request->targetsUid,
              "disliked" => false,
              "liked" => true,
              "fancy" => false,
              "superlike" => false,
              "matched" => true,
              "is_blocked" => false,
              "report_detail_id" => 0,
          ]
        );
        if(!empty($r1))
        {
          $r1->update(["matched" => true]);
        }
        else
        {
          $r2->update(["matched" => true]);
        }
      }
      return response()->json(["status" => true ,"peoples" => $reponse],200);
    }
    public function superliked(request $request)
    {
      $r1 = UserAction::where("user_id","=",$request->myUid)
      ->where("match_id","=",$request->targetsUid)
      ->where("matched","=",false)
      ->first();
      $r2 = UserAction::where("match_id","=",$request->myUid)
      ->where("user_id","=",$request->targetsUid)
      ->where("matched","=",false)
      ->first();
      if(empty($r1) && empty($r2))
      {
        $reponse = User::find(Auth::id())->useractions_by_auth_user()->create(
          [
             "match_id" => $request->targetsUid,
              "disliked" => false,
              "liked" => false,
              "superlike" => true,
              "matched" => true,
              "is_blocked" => false,
              "report_detail_id" => 0,
          ]
        );
      }
      else
      {
        $reponse = User::find(Auth::id())->useractions_by_auth_user()->create(
          [
              "match_id" => $request->targetsUid,
              "disliked" => false,
              "liked" => false,
              "superlike" => true,
              "matched" => false,
              "is_blocked" => false,
              "report_detail_id" => 0,
          ]
        );
        if(!empty($r1))
        {
          $r1->update(["matched" => true]);
        }
        else
        {
          $r2->update(["matched" => true]);
        }
      }
      return response()->json(["status" => true ,"peoples" => $reponse],200);
    }
    
}
