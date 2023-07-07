<?php

namespace App\Http\Controllers\Auth;

use App\Mail\OtpMail;
use Illuminate\Http\Request;
use App\Repository\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function register(){
        return view('user.auth.signup');
    }

    public function store_register(RegisterRequest $registerRequest,UserRepository $userRepository){
        $storeData = $userRepository->createUser($registerRequest);
        auth()->attempt($registerRequest->only('email','password'),$registerRequest->remember_me);
        // dd(auth()->user()->email_verified_at);
        if($storeData){
            if(auth()->user()->email_verified_at == null){
                return redirect()->route('verify_email');
            }else{

                return redirect()->route('home');
            }
        };
    }

    public function verify_email(){

        session()->put('otp', otp());
       $otp = session()->get('otp');

       if($otp){
        $user = auth()->user();
        $name = $user->firstname.' '.$user->lastname;
        Mail::to(auth()->user()->email)->send(new OtpMail($name,$otp,env('APP_NAME')));
       }

        return view('user.auth.otp',compact('otp'));
    }

    public function otp_submit(Request $request, UserRepository $userRepository){
        $request->validate([
            'otp1'=>['required','string'],
            'otp2'=>['required','string'],
            'otp3'=>['required','string'],
            'otp4'=>['required','string'],
            'otp5'=>['required','string']
        ]);
        $requestOtp = $request->otp1.''.$request->otp2.''.$request->otp3.''.$request->otp4.''.$request->otp5;
        $otp = session()->get('otp');
        if(session()->get('otp') == $requestOtp){
            $verifyOtp = $userRepository->verifyEmail();
            if($verifyOtp){
                return redirect()->route('home')->with('success','email address confirmed');
            }else{
                return redirect()->back()->with('error','Something went wrong, Try again!');
            }
        }else{
            return redirect()->back()->with('error','Invalid code!');
        };

    }
}
