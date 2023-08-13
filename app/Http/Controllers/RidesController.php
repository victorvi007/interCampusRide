<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RideRequest;
use App\Repository\RideRepository;
use App\Repository\SeatRepository;
use Illuminate\Support\Facades\Mail;
use App\Mail\RideCreationNotificationMail;

class RidesController extends Controller
{
   public function create_ride(){
    // dd(resource_path('views/partials/months.json'));
    $countries = json_decode(public_path('assets'));
            return view('user.create_ride',compact('countries'));
   }

   public function store_create_ride(RideRequest $rideRequest,RideRepository $rideRepository,SeatRepository $seatRepository){
    $year = date('Y');
    $second = 00;
    $depature = [
        'month'=> $rideRequest->month,
        'day' => $rideRequest->day,
        'year'=>$year,
        'depature_hour'=>$rideRequest->depature_hour,
        'depature_minuite'=>$rideRequest->depature_minuite,
        'second'=>$second,
        'depature_meridiem'=>$rideRequest->depature_meridiem,

    ];


    $arrival = [

        'month'=> $rideRequest->month,
        'day' => $rideRequest->day,
        'year'=>$year,
        'arrival_hour'=>$rideRequest->arrival_hour,
        'arrival_minuite'=>$rideRequest->arrival_minuite,
        'second'=>$second,
        'arrival_meridiem'=>$rideRequest->arrival_meridiem,

    ];


    $arrival_time = arrival_time($arrival);
    $depature_time = depature_time($depature);

     $carImage =  rideImageProcessing($rideRequest->car_image);
     $car_plate = rideImageProcessing($rideRequest->car_plate_number);
     $banner = rideImageProcessing($rideRequest->banner);
     $ride_id = getId();

    $created = $rideRepository->create($rideRequest,$ride_id,$depature_time,$arrival_time,$carImage,$car_plate,$banner,$year);
    if($created){
        $seatRepository->createSeat($ride_id);

        $name = auth()->user()->firstname.' '.auth()->user()->lastname;
        Mail::to(auth()->user()->email)->send(new RideCreationNotificationMail($name,$ride_id));
    }
            return redirect()->back()->with('success','New Ride Has been Created');

   }
}
