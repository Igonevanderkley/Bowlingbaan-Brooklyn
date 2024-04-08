<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persoon;

class PersoonSeeder extends Seeder
{
    public function run()
    {
        Persoon::insert([
            [
                'id' => 1,
                'typePersoonId' => 1,
                'voorNaam' => 'Mazin',
                'tussenvoegsel' => '',
                'achterNaam' => 'Jamil',
                'roepNaam' => 'Mazin',
                'isVolwassen' => 1,
                'isActief' => true,
                'opmerkingen' => null,
            ],
            [
                'id' => 2,
                'typePersoonId' => 1,
                'voorNaam' => 'Arjan',
                'tussenvoegsel' => 'De',
                'achterNaam' => 'Ruijter',
                'roepNaam' => 'Arjan',
                'isVolwassen' => 1,
                'isActief' => true,
                'opmerkingen' => null,
            ],
            [
                'id' => 3,
                'typePersoonId' => 1,
                'voorNaam' => 'Hans',
                'tussenvoegsel' => null,
                'achterNaam' => 'Odijk',
                'roepNaam' => 'Hans',
                'isVolwassen' => 1,
                'isActief' => true,
                'opmerkingen' => null,
            ],
            [
                'id' => 4,
                'typePersoonId' => 1,
                'voorNaam' => 'Dennis',
                'tussenvoegsel' => 'Van',
                'achterNaam' => 'Wakeren',
                'roepNaam' => 'Dennis',
                'isVolwassen' => 1,
                'isActief' => true,
                'opmerkingen' => null,
            ],
            [
                'id' => 5,
                'typePersoonId' => 2,
                'voorNaam' => 'Wilco',
                'tussenvoegsel' => 'Van de ',
                'achterNaam' => 'Grift',
                'roepNaam' => 'Wilco',
                'isVolwassen' => 1,
                'isActief' => true,
                'opmerkingen' => null,
            ],
            [
                'id' => 6,
                'typePersoonId' => 3,
                'voorNaam' => 'Tom',
                'tussenvoegsel' => null,
                'achterNaam' => 'Sanders',
                'roepNaam' => 'Tom',
                'isVolwassen' => 0,
                'isActief' => true,
                'opmerkingen' => null,
            ],
            [
                'id' => 7,
                'typePersoonId' => 3,
                'voorNaam' => 'Andrew',
                'tussenvoegsel' => null,
                'achterNaam' => 'Sanders',
                'roepNaam' => 'Andrew',
                'isVolwassen' => 0,
                'isActief' => true,
                'opmerkingen' => null,
            ],
            [
                'id' => 8,
                'typePersoonId' => 3,
                'voorNaam' => 'Julian',
                'tussenvoegsel' => null,
                'achterNaam' => 'Kaldenheuvel',
                'roepNaam' => 'Julian',
                'isVolwassen' => 1,
                'isActief' => true,
                'opmerkingen' => null,
            ],
        ]);
    }
}