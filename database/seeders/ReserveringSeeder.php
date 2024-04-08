<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Reservering; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReserveringSeeder extends Seeder
{
    public function run()
    {
        Reservering::insert([
            [
                'id' => 4,
                'persoonId' => 1,
                'openingstijdId' => 2,
                'tariefId' => 3,
                'baanId' => 8,
                'pakketOptieId' => 1,
                'reserveringStatusId' => 1,
                'reserveringsnummer' => 2022122000001,
                'datum' => '2022-12-20',
                'aantalUren' => 1,
                'beginTijd' => '15:00:00',
                'eindTijd' => '16:00:00',
                'aantalVolwassen' => 4,
                'aantalKinderen' => 2,
                'isActief' => true,
                'opmerkingen' => null
            ],
            [
                'id' => 5,
                'persoonId' => 2,
                'openingstijdId' => 2,
                'tariefId' => 1,
                'baanId' => 2,
                'pakketOptieId' => 3,
                'reserveringStatusId' => 1,
                'reserveringsnummer' => 2022122000002,
                'datum' => '2022-12-20',
                'aantalUren' => 1,
                'beginTijd' => '17:00:00',
                'eindTijd' => '18:00:00',
                'aantalVolwassen' => 4,
                'aantalKinderen' => null,
                'isActief' => true,
                'opmerkingen' => null
            ],
            [
                'id' => 6,
                'persoonId' => 3,
                'openingstijdId' => 2,
                'tariefId' => 1,
                'baanId' => 2,
                'pakketOptieId' => 3,
                'reserveringStatusId' => 1,
                'reserveringsnummer' => 2022122000003,
                'datum' => '2022-12-24',
                'aantalUren' => 2,
                'beginTijd' => '16:00:00',
                'eindTijd' => '18:00:00',
                'aantalVolwassen' => 4,
                'aantalKinderen' => null,
                'isActief' => true,
                'opmerkingen' => null
            ],
            [
                'id' => 7,
                'persoonId' => 1,
                'openingstijdId' => 2,
                'tariefId' => 1,
                'baanId' => 6,
                'pakketOptieId' => null,
                'reserveringStatusId' => 1,
                'reserveringsnummer' => 2022122000004,
                'datum' => '2022-12-27',
                'aantalUren' => 2,
                'beginTijd' => '17:00:00',
                'eindTijd' => '19:00:00',
                'aantalVolwassen' => 2,
                'aantalKinderen' => null,
                'isActief' => true,
                'opmerkingen' => null
            ],
            [
                'id' => 8,
                'persoonId' => 4,
                'openingstijdId' => 3,
                'tariefId' => 1,
                'baanId' => 4,
                'pakketOptieId' => 4,
                'reserveringStatusId' => 1,
                'reserveringsnummer' => 2022122000005,
                'datum' => '2022-12-28',
                'aantalUren' => 1,
                'beginTijd' => '14:00:00',
                'eindTijd' => '15:00:00',
                'aantalVolwassen' => 3,
                'aantalKinderen' => null,
                'isActief' => true,
                'opmerkingen' => null
            ],
            [
                'id' => 9,
                'persoonId' => 5,
                'openingstijdId' => 10,
                'tariefId' => 3,
                'baanId' => 5,
                'pakketOptieId' => 4,
                'reserveringStatusId' => 1,
                'reserveringsnummer' => 2022122000006,
                'datum' => '2022-12-28',
                'aantalUren' => 2,
                'beginTijd' => '19:00:00',
                'eindTijd' => '21:00:00',
                'aantalVolwassen' => 2,
                'aantalKinderen' => null,
                'isActief' => true,
                'opmerkingen' => null
            ],
        ]);
    }
}

