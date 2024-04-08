<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SpelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_Spel')->insert([
            ['PersoonId' => 1, 'ReserveringId' => 1],
            ['PersoonId' => 2, 'ReserveringId' => 2],
            ['PersoonId' => 3, 'ReserveringId' => 3],
            ['PersoonId' => 1, 'ReserveringId' => 4],
            ['PersoonId' => 4, 'ReserveringId' => 5],
            ['PersoonId' => 6, 'ReserveringId' => 4],
            ['PersoonId' => 7, 'ReserveringId' => 4],
            ['PersoonId' => 8, 'ReserveringId' => 4],
        ]);
    }
}
