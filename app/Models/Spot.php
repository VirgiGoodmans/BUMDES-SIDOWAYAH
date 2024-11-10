<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    protected $fillable = [
        'nama', 'wisata_id', 'harga',
    ];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
}
