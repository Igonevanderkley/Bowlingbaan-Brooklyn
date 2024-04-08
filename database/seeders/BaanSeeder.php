<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Baan;

class BaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Baan::insert([
            ['id' => 1, 'nummer' => 1, 'heeftHek' => 0],
            ['id' => 2, 'nummer' => 2, 'heeftHek' => 0],
            ['id' => 3, 'nummer' => 3, 'heeftHek' => 0],
            ['id' => 4, 'nummer' => 4, 'heeftHek' => 0],
            ['id' => 5, 'nummer' => 5, 'heeftHek' => 0],
            ['id' => 6, 'nummer' => 6, 'heeftHek' => 0],
            ['id' => 7, 'nummer' => 7, 'heeftHek' => 1],
            ['id' => 8, 'nummer' => 8, 'heeftHek' => 1],
        ]);
    }
}

