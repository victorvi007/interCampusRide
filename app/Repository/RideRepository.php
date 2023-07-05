<?php
namespace App\Repository;

use App\Models\Ride;

class RideRepository {
    public $model;

    public function __construct(Ride $model)
    {
        $this->model = $model;
    }

    public function getAllRides(){
        return $this->model->get();
    }
    public function getRide($id){
        return $this->model->where('id',$id)->firstOrFail();
    }

    public function updateBookedSeat($data){
        return $this->model->where(['ride_id'=>$data->ride_id])->update(['seat_booked'=>$data->seat_booked+1]);
    }
    public function checkIfRideIsFull($data){

        $seat_total =  $this->model->where(['ride_id'=>$data->ride_id])->first()->seat_total;
        $seat_booked =  $this->model->where(['ride_id'=>$data->ride_id])->first()->seat_booked;

        return $seat_total - $seat_booked;
    }
}
