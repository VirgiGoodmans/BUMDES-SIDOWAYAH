<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaketKegiatan extends Model
{
    protected $fillable = [
        'nama_paket', 'deskripsi', 'harga', 'tipe'
    ];

    // Relasi dengan Fasilitas
    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class);
    }

    // Relasi dengan Kegiatan (Jika paket juga mencakup kegiatan)
    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }
}
