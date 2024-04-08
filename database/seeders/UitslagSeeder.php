<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UitslagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Uitslagens')->insert([
            ['SpelId' => 1, 'Aantalpunten' => 290],
            ['SpelId' => 2, 'Aantalpunten' => 300],
            ['SpelId' => 3, 'Aantalpunten' => 120],
            ['SpelId' => 4, 'Aantalpunten' => 34],
            ['SpelId' => 5, 'Aantalpunten' => 42],
            ['SpelId' => 6, 'Aantalpunten' => 234],
            ['SpelId' => 7, 'Aantalpunten' => 299],
            ['SpelId' => 8, 'Aantalpunten' => 255],
        ]);
    }
}
