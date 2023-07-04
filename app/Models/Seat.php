<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = [
        'ride_id',
        'seat_1',
        'seat_2',
        'seat_3',
        'seat_4',
        'seat_5',
        'seat_6',
        'seat_7',
        'seat_8',
    ];

   
}
