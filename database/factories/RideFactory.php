<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ride>
 */
class RideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $depatureHour = rand(4,6);

        $from = 'UNEC';
        $to = 'UNN';


            $meridiem = ['AM','PM'];
            $month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

            $year = date('Y');
            $setMonth = $month[rand(6,11)];
            $day = 30;
            $hour  = $depatureHour;
            $minuite = rand(0,59);
            $second = rand(0,59);
            $setMeridiam = $meridiem[rand(0,1)];

            $data = [

                'month'=> $setMonth,
                'day' => $day,
                'year'=>$year,
                'eta_hour'=>$hour,
                'eta_minuite'=>$minuite,
                'eta_second'=>$second,
                'eta_meridiem'=>$setMeridiam

            ];
            $countdown = countDownTimer($data);


        return [
            'user_id'=> 1,
            'ride_id'=> getId(),
            'price'=>rand(500,2000),
            'banner'=>'http://127.0.0.1:8000/assets/images/background.jpg',
            'info'=>fake()->text(),
            'car_image'=>'http://127.0.0.1:8000/assets/images/background.jpg',
            'car_plate_number'=>'http://127.0.0.1:8000/assets/images/background.jpg',
            'from'=> $from,
            'to'=> $to,
            'seat_total'=> 4,
            'seat_available'=> rand(1,3),
            'seat_arrangement'=> fake()->name(),
            'year'=> date('Y'),
            'month'=> $setMonth,
            'day'=> $day,
            'depature_hour'=> $depatureHour,
            'depature_minuite'=> rand(0,59),
            'depature_second'=> rand(0,59),
            'depature_meridiem'=>$setMeridiam,

            'eta_hour'=> $depatureHour +rand(1,5),
            'eta_minuite'=> rand(0,59),
            'eta_second'=> rand(0,59),
            'eta_meridiem'=>$setMeridiam,
            'countdown'=> $countdown,

        ];

    }
}
