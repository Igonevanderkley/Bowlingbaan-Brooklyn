<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_Persoon')->insert([
            ['Id' => 1, 'TypePersoonId' => 1, 'Voornaam' => 'Mazin', 'Tussenvoegsel' => null, 'Achternaam' => 'Jamil', 'Roepnaam' => 'Mazin', 'IsVolwassen' => 1],
            ['Id' => 2, 'TypePersoonId' => 1, 'Voornaam' => 'Arjan', 'Tussenvoegsel' => 'de', 'Achternaam' => 'Ruijter', 'Roepnaam' => 'Arjan', 'IsVolwassen' => 1],
            ['Id' => 3, 'TypePersoonId' => 1, 'Voornaam' => 'Hans', 'Tussenvoegsel' => null, 'Achternaam' => 'Odijk', 'Roepnaam' => 'Hans', 'IsVolwassen' => 1],
            ['Id' => 4, 'TypePersoonId' => 1, 'Voornaam' => 'Dennis', 'Tussenvoegsel' => 'van', 'Achternaam' => 'Wakeren', 'Roepnaam' => 'Dennis', 'IsVolwassen' => 1],
            ['Id' => 5, 'TypePersoonId' => 2, 'Voornaam' => 'Wilco', 'Tussenvoegsel' => 'Van de', 'Achternaam' => 'Grift', 'Roepnaam' => 'Wilco', 'IsVolwassen' => 1],
            ['Id' => 6, 'TypePersoonId' => 3, 'Voornaam' => 'Tom', 'Tussenvoegsel' => null, 'Achternaam' => 'Sanders', 'Roepnaam' => 'Tom', 'IsVolwassen' => 0],
            ['Id' => 7, 'TypePersoonId' => 3, 'Voornaam' => 'Andrew', 'Tussenvoegsel' => null, 'Achternaam' => 'Sanders', 'Roepnaam' => 'Andrew', 'IsVolwassen' => 0],
            ['Id' => 8, 'TypePersoonId' => 3, 'Voornaam' => 'Julian', 'Tussenvoegsel' => null, 'Achternaam' => 'Kaldenheuvel', 'Roepnaam' => 'Julian', 'IsVolwassen' => 1],
        ]);
    }
}
