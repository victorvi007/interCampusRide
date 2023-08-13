<?php
namespace App\Repository;

use App\Models\Ride;

class RideRepository {
    public $model;

    public function __construct(Ride $model)
    {
        $this->model = $model;
    }

    public function create($data,$ride_id,$depature_time,$arrival_time,$carImage,$car_plate,$banner,$year){
        // dd($data);
      return $this->model->create([
        'user_id'=>auth()->user()->id,
        'ride_id'=>$ride_id,
        'from'=>$data->from,
        'to'=>$data->to,
        'year'=>$year,
        'month' => $data->month,
        'day' => $data->day,
        'info'=>$data->info,
        'depature_hour' => $data->depature_hour,
        'depature_minuite' =>$data->depature_minuite,
        'depature_meridiem' =>$data->depature_meridiem,
        'arrival_hour' => $data->arrival_hour,
        'arrival_minuite' => $data->arrival_minuite,
        'arrival_meridiem' =>$data->arrival_meridiem,
        'price' =>$data->price,
        'banner'=>$data->banner,
        'car_image'=>$carImage,
        'car_plate_number'=>$car_plate,
        'banner'=>$banner,
        'seat_total' => $data->seat,
        'seat_booked'=>0,
        'depature_time'=>$depature_time,
        'arrival_time'=>$arrival_time
      ]);
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
