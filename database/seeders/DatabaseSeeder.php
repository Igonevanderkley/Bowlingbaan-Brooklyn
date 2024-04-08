<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\Player;
use App\Models\Score;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Reservering;
use App\Models\type_persoon;
use App\Models\baan;

use App\Models\persoon;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        persoon::create([

            'typePersoonId' => 1,
            'voornaam' => 'Mazin',
            'achternaam' => 'Jamil',
            'roepnaam' => 'Mazin',
            'isVolwassen' => 1,

        ]);

        persoon::create([
            'typePersoonId' => 1,
            'voornaam' => 'Arjan',
            'tussenvoegsel' => 'de',
            'achternaam' => 'Ruijter',
            'roepnaam' => 'Arjan',
            'isVolwassen' => 1,
        ]);

        Reservering::insert([
            [
                'persoonId' => 1,
                'openingsTijdId' => 1,
                'tariefId' => 1,
                'baanId' => 5,
                'pakketOptieId' => 1,
                'reserveringsStatusId' => 1,
                'reserveringsNummer' => 2022122000001,
                'datum' => '2022-12-20',
                'aantalUren' => 1,
                'beginTijd' => '15:00:00',
                'eindTijd' => '16:00:00',
                'aantalVolwassenen' => 4,
                'aantalKinderen' => 2
            ],
            [
                'persoonId' => 1,
                'openingsTijdId' => 2,
                'tariefId' => 2,
                'baanId' => 2,
                'pakketOptieId' => 1,
                'reserveringsStatusId' => 1,
                'reserveringsNummer' => 2022122000002,
                'datum' => '2022-12-20',
                'aantalUren' => 1,
                'beginTijd' => '15:00:00',
                'eindTijd' => '16:00:00',
                'aantalVolwassenen' => 4,
                'aantalKinderen' => 0
            ]
        ]);


        type_persoon::insert([
            [
                'id' => 1,
                'naam' => 'klant',
            ],
            [
                'id' => 2,
                'naam' => 'medewerker',
            ],
            [
                'id' => 3,
                'naam' => 'gast',
            ]
        ]);

        baan::insert([
            ['id' => 1, 'nummer' => 1, 'heeftHek' => 0],
            ['id' => 2, 'nummer' => 2, 'heeftHek' => 0],
            ['id' => 3, 'nummer' => 3, 'heeftHek' => 0],
            ['id' => 4, 'nummer' => 4, 'heeftHek' => 0],
            ['id' => 5, 'nummer' => 5, 'heeftHek' => 0],
            ['id' => 6, 'nummer' => 6, 'heeftHek' => 0],
            ['id' => 7, 'nummer' => 7, 'heeftHek' => 1],
            ['id' => 8, 'nummer' => 8, 'heeftHek' => 1]

        ]);
    }
}
