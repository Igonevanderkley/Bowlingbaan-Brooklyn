<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\Player;
use App\Models\Score;
use Illuminate\Database\Seeder;
use Database\Seeders\ReserveringSeeder;
use Database\Seeders\PersoonSeeder;
use Database\Seeders\TypePersoonSeeder;
use Database\Seeders\BaanSeeder;use Illuminate\Support\Facades\Hash;
use App\Models\Reservering;
use App\Models\type_persoon;
use App\Models\baan;

use App\Models\persoon;

use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ReserveringSeeder::class,
            PersoonSeeder::class,
            TypePersoonSeeder::class,
            BaanSeeder::class,
        ]);
        $faker = Faker::create();
       
    }
}
