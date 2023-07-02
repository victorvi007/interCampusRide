<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\RideRepository;
use App\Http\Requests\BookingRequest;

class BookingController extends Controller
{
    public function booking (RideRepository $rideRepository,$id){
       $ride =  $rideRepository->getRide($id);
        return view('user.book',compact('ride'));
    }

    public function store_booking(BookingRequest $bookingRequest){
        dd($bookingRequest->all());
    }
}
