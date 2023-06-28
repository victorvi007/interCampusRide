<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('user.auth.login');
    }

    public function store_login(LoginRequest $loginRequest){
      $authAttempt =   Auth::attempt(['email'=>$loginRequest->email,'password'=>$loginRequest->password]);
        return redirect()->route('home');
    }
}
