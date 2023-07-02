<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        if(auth()->user() ){
           return redirect()->back();
        }
        return view('user.auth.login');
    }

    public function store_login(LoginRequest $loginRequest){

        $authAttempt =   Auth::attempt(['email'=>$loginRequest->email,'password'=>$loginRequest->password],$loginRequest->remember_me);
        if($authAttempt){
            return response()->json([
                'msg' => 'User verification Success.',
                'status'=>'success'
                        ]);
        }else{

            return response()->json([
                'msg' => 'Incorrect Email or Password',
                'status'=>'unauthorized'
                        ]);

        }


        // return redirect()->back();
    }

    public function logout(){
        auth()->logout();
        return redirect()->back()->with('msg','logged out successful');
    }
}
