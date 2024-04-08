<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Baan Seeder
        DB::table('baan')->insert([
            ['id' => 1, 'nummer' => 1, 'heeftHek' => 0],
            ['id' => 2, 'nummer' => 2, 'heeftHek' => 0],
            // Voeg hier de rest van de waarden toe...
        ]);

        // Persoon Seeder
        DB::table('persoon')->insert([
            ['id' => 1, 'typePersoonId' => 1, 'voorNaam' => 'Mazin', 'tussenvoegsel' => '', 'achterNaam' => 'Jamil', 'roepNaam' => 'Mazin', 'isVolwassen' => 1, 'isActief' => 1, 'opmerkingen' => NULL],
            ['id' => 2, 'typePersoonId' => 1, 'voorNaam' => 'Arjan', 'tussenvoegsel' => 'De', 'achterNaam' => 'Ruijter', 'roepNaam' => 'Arjan', 'isVolwassen' => 1, 'isActief' => 1, 'opmerkingen' => NULL],
            // Voeg hier de rest van de waarden toe...
        ]);

        // Reservering Seeder
        DB::table('reservering')->insert([
            ['id' => 4, 'persoonId' => 1, 'openingstijdId' => 2, 'tariefId' => 3, 'baanId' => 8, 'pakketOptieId' => 1, 'reserveringStatusId' => 1, 'reserveringsnummer' => 2022122000001, 'datum' => '2022-12-20', 'aantalUren' => 1, 'beginTijd' => '15:00:00', 'eindTijd' => '16:00:00', 'aantalVolwassen' => 4, 'aantalKinderen' => 2, 'isActief' => 1, 'opmerkingen' => NULL],
            // Voeg hier de rest van de waarden toe...
        ]);

        // Typepersoon Seeder
        DB::table('typepersoon')->insert([
            ['id' => 1, 'naam' => 'Klant'],
            ['id' => 2, 'naam' => 'Medewerker'],
            ['id' => 3, 'naam' => 'Gast'],
        ]);
    }
}