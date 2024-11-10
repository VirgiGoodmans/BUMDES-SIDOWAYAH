<?php

use Illuminate\Database\Seeder;
use App\Models\Spot;

class SpotSeeder extends Seeder
{
    public function run()
    {
        Spot::create([
            'nama_spot' => 'Pendopo',
            'kapasitas' => 100,
            'wisata_id' => 1,  // Asumsi Siblarak memiliki id 1
        ]);

        Spot::create([
            'nama_spot' => 'Aula',
            'kapasitas' => 80,
            'wisata_id' => 1,  // Asumsi Siblarak memiliki id 1
        ]);
    }
}
