<?php
namespace App\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository{

    public $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function createUser($data){
       return $this->model->create([
            'firstname'=>$data->firstname,
            'lastname'=>$data->lastname,
            'email'=>$data->email,
            'reg_number'=>$data->reg_number,
            'address'=>$data->address,
            'faculty'=>$data->faculty,
            'department'=>$data->department,
            'password'=>Hash::make($data->password),
        ]);
    }
}
