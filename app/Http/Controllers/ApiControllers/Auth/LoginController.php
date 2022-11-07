<?php

//namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers\ApiControllers\Auth;

use App\Http\Controllers\Controller;
//use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest');
    }
    public function do_login(request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = User::with("Location")->find(Auth::id());
            $token =  $user->createToken('MyApp')->accessToken; 
            return response()->json(["status" => "false","message" => "login successfully","user" => $user ,"token" => $token],200); 
        } 
        else
        { 
            return response()->json(["status" => false ,"message" => "username & password not match"],401); 
        } 
    }
    
    public function user()
    {   
         return response()->json([
            'status' => 'success',
            'msg' => 'user authenticated',
            'user' => Auth::user()
         ], 200);
    }
}
