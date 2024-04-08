<?php

use Illuminate\Database\Seeder;
use App\Models\TypePersoon;

class TypePersoonSeeder extends Seeder
{
    public function run()
    {
        TypePersoon::insert([
            ['id' => 1, 'naam' => 'Klant'],
            ['id' => 2, 'naam' => 'Medewerker'],
            ['id' => 3, 'naam' => 'Gast'],
        ]);
    }
}

