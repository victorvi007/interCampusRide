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
}
