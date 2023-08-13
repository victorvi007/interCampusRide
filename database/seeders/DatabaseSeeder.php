<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Ride;
use App\Models\Seat;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // $tests = Ride::factory(5)->create();

        // foreach($tests as $test){
        //      \App\Models\Seat::factory()->create([
        //         'ride_id' => $test->ride_id,
        //     ]);
        // }

              Seat::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
