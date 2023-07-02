<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Repository\UserRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function register(){
        return view('user.auth.signup');
    }

    public function store_register(RegisterRequest $registerRequest,UserRepository $userRepository){
        $storeData = $userRepository->createUser($registerRequest);
        auth()->attempt($registerRequest->only('email','password'),$registerRequest->remember_me);
        if($storeData){
            return redirect()->route('home');
        };
    }
}
