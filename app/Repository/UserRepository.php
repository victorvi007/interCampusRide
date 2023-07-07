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
            'user_id'=>userId(),
            'firstname'=>$data->firstname,
            'lastname'=>$data->lastname,
            'email'=>$data->email,
            'avater'=>"http://127.0.0.1:8000/assets/images/user-image.jpg",
            'phone'=>'+234 812 0844 654',
            'reg_number'=>$data->reg_number,
            'address'=>$data->address,
            'faculty'=>$data->faculty,
            'department'=>$data->department,
            'password'=>Hash::make($data->password),
        ]);
    }

    public function deductRideFee($newBalance){
        return $this->model->where(['user_id'=>auth()->user()->user_id])->update(['balance'=>$newBalance]);
    }

    public function verifyEmail(){
        return $this->model->where(['id'=>auth()->user()->id])->update(['email_verified_at'=>date('Y-m-d H:i:s')]);
    }
}
