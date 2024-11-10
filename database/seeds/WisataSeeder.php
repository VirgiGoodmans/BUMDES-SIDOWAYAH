<?php

use Illuminate\Database\Seeder;
use App\Models\Wisata;

class WisataSeeder extends Seeder
{
    public function run()
    {
        Wisata::create([
            'nama_wisata' => 'Siblarak',
            'deskripsi' => 'Wisata alam dengan spot foto menarik.',
            'lokasi' => 'Desa Sidowayah',
            'harga' => 50000
        ]);

        Wisata::create([
            'nama_wisata' => 'Umbul Kemanten',
            'deskripsi' => 'Pemandian alami dengan suasana asri.',
            'lokasi' => 'Desa Sidowayah',
            'harga' => 30000
        ]);
    }
}
