<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\RideRepository;
use Illuminate\Support\Facades\Mail;
use App\Mail\RideCreationNotificationMail;

class UserController extends Controller
{
    public function home (RideRepository $rideRepository){
        // dd(userId());
        $rides = $rideRepository->getAllRides();
        return view('user.home',compact('rides'));
    }

    public function mail(){
        $name = auth()->user()->firstname.' '.auth()->user()->lastname;
        $ride_id = 'sdfs37dx';
        Mail::to(auth()->user()->email)->send(new RideCreationNotificationMail($name,$ride_id));
    }




}
