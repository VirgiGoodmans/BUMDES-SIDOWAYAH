<?php

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run()
    {
        News::create([
            'judul' => 'Pembukaan Wisata Baru di Siblarak',
            'konten' => 'Wisata baru di Siblarak siap menyambut pengunjung.',
            'kategori' => 'Informasi',
            'tanggal_terbit' => now()
        ]);

        News::create([
            'judul' => 'Kegiatan Outbond di Desa Sidowayah',
            'konten' => 'Ayo bergabung dalam kegiatan outbond yang seru!',
            'kategori' => 'Event',
            'tanggal_terbit' => now()
        ]);
    }
}
