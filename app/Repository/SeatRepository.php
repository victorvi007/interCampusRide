<?php
namespace App\Repository;

use App\Models\Seat;

class SeatRepository{
   public $model;

   public function __construct(Seat $model){
    $this->model = $model;
   }

   public function createSeat($data){
    return $this->model->create([
        'ride_id'=>$data->ride_id,

    ]);
   }

   public function updateSeat($data){
    return $this->model->where(['ride_id' => $data->ride_id])->update([$data->seat_id => auth()->user()->id]);
   }
}
