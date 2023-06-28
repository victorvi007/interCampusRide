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
        'seat_total',
        'seat_available',
        'seat_arrangement',
        'year',
        'month',
        'day',
        'hour',
        'minuite',
        'second',

    ];


    protected  $primaryKey = 'user_id';

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}
