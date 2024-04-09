<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Package::factory(1)->create();

        Package::create([
            'name' => 'Snackpakket basis of luxe',
            'description' => 'Dit is een snackpakket voor de basis of luxe variant',
            'price' => 20.00,
        ]);
        Package::create([
            'name' => 'Kinderpartij ',
            'description' => '(chips, cola en verrassing)',
            'price' => 15.00,
        ]);
        Package::create([
            'name' => 'Vrijgezellenfeest ',
            'description' => 'Voor de vrijgezel',
            'price' => 15.00,
        ]);
    }
}
