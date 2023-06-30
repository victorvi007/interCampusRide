<?php

namespace App\Http\Controllers;

use App\Repository\RideRepository;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking (RideRepository $rideRepository,$id){
       $ride =  $rideRepository->getRide($id);
    //    dd($ride);
        return view('user.book',compact('ride'));
    }
}
