<?php
namespace App\Repository;


use App\Models\Booking;

class BookingRepository{

    public $model;

    public function __construct(Booking $model){
        $this->model  = $model;
    }
    public function createBooking($data){
        return $this->model->create([
            'user_id'=>auth()->user()->id,
            'booking_id'=>getId(),
            'ride_id'=>$data->ride_id,
            'seat_id'=>$data->seat_id,
            'fee'=>$data->fee,
            'payment_method'=>$data->payment_method
        ]);
    }

    public function checkForDuplicateBooking($data){
        // dd($data);
        return $this->model->where(['user_id'=>auth()->user()->id ,'ride_id'=>$data->ride_id])->exists();
    }
}
