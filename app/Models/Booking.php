<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
         protected  $fillable = [
        'user_id',
        'booking_id',
        'ride_id',
        'seat_id',
        'fee',
        'payment_method',
         ];
         protected  $primaryKey = 'booking_id';

         public function ride(){
            return $this->belongsTo(User::class,'ride_id');
        }
}
