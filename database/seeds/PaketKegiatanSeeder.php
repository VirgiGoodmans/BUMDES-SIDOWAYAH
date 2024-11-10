<?php

use Illuminate\Database\Seeder;
use App\Models\PaketKegiatan;

class PaketKegiatanSeeder extends Seeder
{
    public function run()
    {
        PaketKegiatan::create([
            'nama_paket' => 'Paket Dolanan I',
            'deskripsi' => 'Paket kegiatan tradisional untuk anak-anak.',
            'harga' => 150000,
            'tipe' => 'Dolanan'
        ]);

        PaketKegiatan::create([
            'nama_paket' => 'Paket Dolanan II',
            'deskripsi' => 'Paket kegiatan tradisional dengan tambahan aktivitas.',
            'harga' => 180000,
            'tipe' => 'Dolanan'
        ]);

        PaketKegiatan::create([
            'nama_paket' => 'Outbond 1',
            'deskripsi' => 'Paket kegiatan outbound penuh tantangan.',
            'harga' => 200000,
            'tipe' => 'Outbond'
        ]);

        PaketKegiatan::create([
            'nama_paket' => 'Outbond 2',
            'deskripsi' => 'Paket kegiatan outbound untuk remaja.',
            'harga' => 220000,
            'tipe' => 'Outbond'
        ]);
    }
}
