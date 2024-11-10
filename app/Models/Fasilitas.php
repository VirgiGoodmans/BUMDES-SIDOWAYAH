<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $fillable = [
        'nama_fasilitas', 'deskripsi', 'paket_kegiatan_id'
    ];

    // Relasi dengan PaketKegiatan
    public function paketKegiatan()
    {
        return $this->belongsTo(PaketKegiatan::class);
    }
}
