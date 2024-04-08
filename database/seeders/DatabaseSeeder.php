<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ReserveringSeeder;
use Database\Seeders\PersoonSeeder;
use Database\Seeders\TypePersoonSeeder;
use Database\Seeders\BaanSeeder;
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
    }
}
