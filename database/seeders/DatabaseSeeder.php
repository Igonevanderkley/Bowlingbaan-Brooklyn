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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(ReserveringSeeder::class);
        $this->call(PersoonSeeder::class);
        $this->call(UitslagSeeder::class);
        $this->call(SpelSeeder::class);

        reservation::create([
            'userId' => 1, // Replace with actual user ID
            'adults' => 2,
            'children' => 1,
            'packageId' => 1, // Replace with actual package ID
            'fence' => true,
            'date' => '2021-12-31',
        ]);
    }
}
