<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api"   middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

  Route::POST('/auth/register',[App\Http\Controllers\ApiControllers\Auth\RegisterController::Class,"add"]);
  Route::POST('/auth/check-email-registered',[App\Http\Controllers\ApiControllers\Auth\RegisterController::Class,"email_check"]);
  Route::POST('/auth/login',[App\Http\Controllers\ApiControllers\Auth\LoginController::Class,"do_login"]);
  
  
  Route::get('/send-mail', function () {
    $details = [
        'title' => 'Mail from Qavah.com',
        'body' => 'This is for testing email using smtp'
    ];
    \Mail::to('tahirsandh78628@gmail.com')->send(new \App\Mail\email_template($details));
    
    dd("Email is Sent.");
});

  //Route::POST('/auth/user',[App\Http\Controllers\ApiControllers\Auth\LoginController::Class,"user"])->middleware("auth:api");
  Route::get('/user/get-my-profile{myUid?}',[App\Http\Controllers\ApiControllers\UsersController::Class,'get_user_profile']);

  

  //Discovery; 
  Route::POST('/swap/popup-showed',function(){
      echo json_encode(["message" => "ok" , "status" => true]);
  });
  Route::POST('swap/popup-showed-landing',function(){
    echo json_encode(["message" => "ok" , "status" => true]);
  }); 
  Route::POST('/auth/resend-otp',function(){
    echo json_encode(["message" => "ok" , "status" => true]);
  });
 
  Route::group(["middleware" => "auth:api"],function(){
    
    Route::get('/auth/user',[App\Http\Controllers\ApiControllers\UsersController::Class,"get_user_profile"]);
    Route::POST('/send/mobile_opt',[App\Http\Controllers\ApiControllers\Auth\VerificationController::Class,"sendsms"]); 
    Route::POST('/auth/send-email-otp',[App\Http\Controllers\ApiControllers\Auth\VerificationController::Class,"send_email"]); 
    //Route::POST('/send/resend-email-otp',[App\Http\Controllers\ApiControllers\VerificationController::Class,"send_email"]);   
    Route::get('/auth/logout',[App\Http\Controllers\ApiControllers\UsersController::Class,"logout"]);
    Route::POST('/auth/verify-otp',[App\Http\Controllers\ApiControllers\Auth\VerificationController::Class,"verify_otp"]);
    Route::POST('/auth/verify-email-otp',[App\Http\Controllers\ApiControllers\Auth\VerificationController::Class,"email_verify_otp"]);
    Route::get('/packages',[App\Http\Controllers\ApiControllers\PackagesController::Class,"get_packages"]); 
    Route::POST('/packages/get_package',[App\Http\Controllers\ApiControllers\PackagesController::Class,"get_package_detail"]); 
    Route::POST('/subscribion/buy',[App\Http\Controllers\ApiControllers\SubcribtionsController::Class,"buy_packages"]); 
    Route::get('/discover/getPeople/{myUid?}/{seeking?}/{lat?}/{lng?}/{city?}/{zipcode?}',[App\Http\Controllers\ApiControllers\DiscoveryController::Class,"get_peoples"]);
    Route::POST('/swap/liked',[App\Http\Controllers\ApiControllers\DiscoveryController::Class,"liked"]);
    Route::POST('/swap/superLiked',[App\Http\Controllers\ApiControllers\DiscoveryController::Class,"superliked"]);
    Route::POST('/swap/matchMe',function(){
      return response()->json(["success" => true , "message" => "retrived user"], 200);
    });
    Route::get('/user/get_profile_detail/{myUid?}/{targetUid?}/{lat?}/{lng?}',[App\Http\Controllers\ApiControllers\UsersController::Class,"get_profile_detail"]);

    
    Route::POST('/favoured/who-likes-me',[App\Http\Controllers\ApiControllers\FavouredController::Class,"who_likes_me"]);
    Route::POST('/favoured/who-i-like',[App\Http\Controllers\ApiControllers\FavouredController::Class,"whi_i_like"]);
    
    // Route::POST('/swap/liked',function(){
    //   return response()->json(["status" => true , "message" => "match process complete"], 200);
    // });
    // Route::POST('/',function(){
    //   return response()->json(["status" => true , "message" => "match process complete"], 200);
    // });
    
    
    //Route::POST('/subscribtion/buyaddon',[App\Http\Controllers\ApiControllers\SubcribtionsController::Class,"buyAddon"]); 
  
  });


// function(request $request){
//    echo json_encode(["status"=>false,"message"=>"Email is available!","status" => true, "request" => $request->all()]);
 
// });

// Route::POST('/auth/check-email-registered',function(request $request){
//     echo json_encode(["status"=>true,"message"=>"Email is available!","status" => true, "request" => $request->all()]);
//     //echo json_encode(["error"=>"email already exist","status" => false, "request" => $request->all()]);
//  });
 
 Route::POST('/user/gallery_files_upload',function(request $request){
    $imageName = time().'.'.$request->file->getClientOriginalExtension();
    $result = $request->file->move(public_path('images/gallery_Images'), $imageName);
    $imagepath = asset('images/gallery_Images/'.$imageName);
    return response()->json(['message'=>'You have successfully upload file.',"imagename" => $imagepath]);
    //echo json_encode(["error"=>"email already exist","status" => false, "request" => $request->all()]);
 });
 Route::POST('/user/profile_files_upload',function(request $request){
   $imageName = time().'.'.$request->file->getClientOriginalExtension();
   $request->file->move(public_path('images/profile_images'), $imageName);
   $imagepath = asset('images/profile_images/'.$imageName);
   return response()->json(['message'=>'You have successfully upload file.',"imagename" => $imagepath]);
   //echo json_encode(["error"=>"email already exist","status" => false, "request" => $request->all()]);
 });
 
// Route::POST('/auth/verify-otp',function(request $request){
//     echo json_encode($request->all());
//  });
 