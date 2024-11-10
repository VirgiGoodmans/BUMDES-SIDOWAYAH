<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $fillable = [
        'nama', 'deskripsi', 'gambar',
    ];

    public function spots()
    {
        return $this->hasMany(Spot::class);
    }
}
