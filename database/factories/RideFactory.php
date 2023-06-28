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
        return [
            'user_id'=> 1,
            'ride_id'=> fake()->text(),
            'price'=>rand(500,2000),
            'banner'=>'http://127.0.0.1:8000/assets/images/background.jpg',
            'seat_total'=> 4,
            'seat_available'=> 3,
            'seat_arrangement'=> fake()->name(),
            'year'=> date('Y'),
            'month'=> 6,
            'day'=> rand(23,26),
            'hour'=> rand(7,5),
            'minuite'=> rand(0,59),
            'second'=> rand(0,59),
        ];

    }
}
