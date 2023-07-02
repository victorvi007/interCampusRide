<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    use HasFactory;
    protected $fillable =[

        'user_id',
        'ride_id',
        'banner',
        'price',
        'info',
        'car_image',
        'car_plate_number',
        'seat_total',
        'seat_available',
        'seat_arrangement',
        'year',
        'month',
        'day',
        'countdown',
        'depature_hour',
        'depature_minuite',
        'depature_second',
        'depature_meridiem',
        'eta_hour',
        'eta_minuite',
        'eta_second',
        'eta_meridiem',

    ];


    protected  $primaryKey = 'user_id';

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    // public function booking(){
    //     return $this->hasMany(User::class,'user_id','id');
    // }

}
