<?php

namespace App\Http\Controllers;

use App\Repository\RideRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home (RideRepository $rideRepository){
        $rides = $rideRepository->getAllRides();
        return view('user.home',compact('rides'));
    }




}
