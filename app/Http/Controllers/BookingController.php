<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\RideRepository;
use App\Http\Requests\BookingRequest;
use App\Repository\BookingRepository;


class BookingController extends Controller
{
    public function booking (RideRepository $rideRepository,$id){
       $ride =  $rideRepository->getRide($id);
        return view('user.book',compact('ride'));
    }

    public function store_booking(BookingRequest $bookingRequest,BookingRepository $bookingRepository){

        $checkForDuplicateBooking = $bookingRepository->checkForDuplicateBooking($bookingRequest);
        // dd($checkForDuplicateBooking);
        if(!$checkForDuplicateBooking){

                    $booked = $bookingRepository->createBooking($bookingRequest);
                    if($booked){
                        return response()->json([
                            'msg' => 'Ride Booked Successfully',
                            'status'=>'success',
                            'next'=>'/booking/log'
                                    ]);

                    }else{
                        return response()->json([
                            'msg' => 'something went wrong, Try again',
                            'status'=>'error',

                                    ]);
                    }




        }else{
            return response()->json([
                'msg' => 'You already booked on this ride',
                'status'=>'warning'
                        ]);
        }
    }
}
