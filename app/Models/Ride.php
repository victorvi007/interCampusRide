<?php

namespace App\Models;

use App\Models\Seat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ride extends Model
{
    use HasFactory;
    protected $fillable =[

        'user_id',
        'ride_id',
        'from',
        'to',
        'banner',
        'price',
        'info',
        'car_image',
        'car_plate_number',
        'seat_total',
        'seat_booked',
        'year',
        'month',
        'day',
        'countdown',
        'depature_hour',
        'depature_minuite',
        'depature_second',
        'depature_meridiem',
        'arrival_hour',
        'arrival_minuite',
        'arrival_second',
        'arrival_meridiem',
        'depature_time',
        'arrival_time',

    ];


    protected  $primaryKey = 'user_id';

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function booking(){
        return $this->hasMany(User::class,'user_id','id');
    }

    public function seats(){
        return $this->hasOne(Seat::class,'ride_id','ride_id');
    }

}
