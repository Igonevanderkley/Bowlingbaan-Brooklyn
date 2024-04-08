<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReserveringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_Reservering')->insert([
            ['PersoonId' => 1, 'OpeningstijdId' => 2, 'TariefId' => 1, 'BaanId' => 8, 'PakketOptieId' => 1, 'ReserveringStatusId' => 1, 'Reserveringsnummer' => '2022122000001', 'Datum' => '2022-12-20', 'AantalUren' => 1, 'BeginTijd' => '2022-12-20 15:00:00', 'EindTijd' => '2022-12-20 16:00:00', 'AantalVolwassen' => 4, 'AantalKinderen' => 2],
            ['PersoonId' => 2, 'OpeningstijdId' => 2, 'TariefId' => 1, 'BaanId' => 2, 'PakketOptieId' => 3, 'ReserveringStatusId' => 1, 'Reserveringsnummer' => '2022122000002', 'Datum' => '2022-12-20', 'AantalUren' => 1, 'BeginTijd' => '2022-12-20 17:00:00', 'EindTijd' => '2022-12-20 18:00:00', 'AantalVolwassen' => 4, 'AantalKinderen' => null],
            ['PersoonId' => 3, 'OpeningstijdId' => 7, 'TariefId' => 2, 'BaanId' => 3, 'PakketOptieId' => 1, 'ReserveringStatusId' => 1, 'Reserveringsnummer' => '2022122400003', 'Datum' => '2022-12-24', 'AantalUren' => 2, 'BeginTijd' => '2022-12-24 16:00:00', 'EindTijd' => '2022-12-24 18:00:00', 'AantalVolwassen' => 4, 'AantalKinderen' => null],
            ['PersoonId' => 1, 'OpeningstijdId' => 2, 'TariefId' => 1, 'BaanId' => 6, 'PakketOptieId' => null, 'ReserveringStatusId' => 1, 'Reserveringsnummer' => '2022122700004', 'Datum' => '2022-12-27', 'AantalUren' => 2, 'BeginTijd' => '2022-12-27 17:00:00', 'EindTijd' => '2022-12-27 19:00:00', 'AantalVolwassen' => 2, 'AantalKinderen' => null],
            ['PersoonId' => 4, 'OpeningstijdId' => 3, 'TariefId' => 1, 'BaanId' => 4, 'PakketOptieId' => 4, 'ReserveringStatusId' => 1, 'Reserveringsnummer' => '2022122800005', 'Datum' => '2022-12-28', 'AantalUren' => 1, 'BeginTijd' => '2022-12-28 14:00:00', 'EindTijd' => '2022-12-28 15:00:00', 'AantalVolwassen' => 3, 'AantalKinderen' => null],
            ['PersoonId' => 5, 'OpeningstijdId' => 10, 'TariefId' => 3, 'BaanId' => 5, 'PakketOptieId' => 4, 'ReserveringStatusId' => 1, 'Reserveringsnummer' => '2022122800006', 'Datum' => '2022-12-28', 'AantalUren' => 2, 'BeginTijd' => '2022-12-28 19:00:00', 'EindTijd' => '2022-12-28 21:00:00', 'AantalVolwassen' => 2, 'AantalKinderen' => null],
        ]);
    }
}
