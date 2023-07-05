<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\RideRepository;
use App\Repository\SeatRepository;
use App\Http\Requests\BookingRequest;
use App\Repository\BookingRepository;


class BookingController extends Controller
{
    public function booking (RideRepository $rideRepository,$id){
       $ride =  $rideRepository->getRide($id);
    //    dd($ride->seats);
        return view('user.book',compact('ride'));
    }

    public function store_booking(BookingRequest $bookingRequest,BookingRepository $bookingRepository,SeatRepository $seatRepository,RideRepository $rideRepository)
    {

        $checkForDuplicateBooking = $bookingRepository->checkForDuplicateBooking($bookingRequest);
        // dd();
        $checkIfSeatIsAvailable = $rideRepository->checkIfRideIsFull($bookingRequest);
        if(!$checkForDuplicateBooking){
            if($checkIfSeatIsAvailable != 0){

                $booked = $bookingRepository->createBooking($bookingRequest);
                $seatRepository->updateSeat($bookingRequest);
                $rideRepository->updateBookedSeat($bookingRequest);
                        if($booked){
                            return response()->json([
                                'msg' => 'Ride Booked Successfully',
                                'status'=>'success',
                                'next'=>'/log'
                                        ]);

                        }else{
                            return response()->json([
                                'msg' => 'something went wrong, Try again',
                                'status'=>'error',

                                        ]);
                        }
            }else{
                return response()->json([
                    'msg' => 'Sorry, This ride is full',
                    'status'=>'warning'
                ]);
            }




        }else{
            return response()->json([
                'msg' => 'You already booked on this ride',
                'status'=>'warning'
                        ]);
        }
    }

    public function booking_log(){
        return view('user.booking_log');
    }
}
