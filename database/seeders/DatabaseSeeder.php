<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\Player;
use App\Models\Score;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Creating a static user
        User::create([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'mobile' => $faker->phoneNumber,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        // Creating 10 static reservations
        for ($i = 0; $i < 10; $i++) {
            Reservation::create([
                'userId' => 1,
                'adults' => $faker->numberBetween(1, 5),
                'children' => $faker->numberBetween(0, 3),
                'packageId' => $faker->numberBetween(1, 10),
                'fence' => $faker->boolean,
                'date' => $faker->dateTimeThisMonth(),
            ]);
        }

        // Creating 10 static players
        for ($i = 0; $i < 10; $i++) {
            Player::create([
                'name' => $faker->firstName,
                'reservationId' => $faker->numberBetween(1, 10),
            ]);

            Player::create([
                'name' => $faker->firstName,
                'reservationId' => 4,
            ]);
        }

        // Creating 10 static scores
        for ($i = 0; $i < 10; $i++) {
            Score::create([
                'score' => $faker->numberBetween(60, 100),
                'round' => 1,
                'playerId' => $faker->numberBetween(1, 10),
            ]);

            Score::create([
                'score' => $faker->numberBetween(60, 100),
                'round' => 2,
                'playerId' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
