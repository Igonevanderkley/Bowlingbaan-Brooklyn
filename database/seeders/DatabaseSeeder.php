<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\Player;
use App\Models\Score;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Reservering;
use App\Models\type_persoon;
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

        persoon::create(
            [
                'typePersoonId' => 1,
                'voornaam' => 'Mazin',
                'achternaam' => 'Jamil',
                'roepnaam' => 'Mazin',
                'isVolwassen' => 1,
            ]);

        Reservering::create(
            [
                'persoonId' => 1,
                'openingsTijdId' => 1,
                'tariefId' => 1,
                'baanId' => 8,
                'pakketOptieId' => 1,
                'reserveringsStatusId' => 1,
                'reserveringsNummer' => 2022122000001,
                'datum' => '2022-12-20',
                'aantalUren' => 1,
                'beginTijd' => $faker->time(),
                'eindTijd' => $faker->time(),
                'aantalVolwassenen' => 4,
                'aantalKinderen' => 2
            ],
            [
                'persoonId' => 2,
                'openingsTijdId' => 2,
                'tariefId' => 2,
                'baanId' => 8,
                'pakketOptieId' => 1,
                'reserveringsStatusId' => 1,
                'reserveringsNummer' => 2022122000002,
                'datum' => '2022-12-20',
                'aantalUren' => 1,
                'beginTijd' => $faker->time(),
                'eindTijd' => $faker->time(),
                'aantalVolwassenen' => 4,
                'aantalKinderen' => 2
            ]
        );

        type_persoon::create(
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
        );
    }
}
