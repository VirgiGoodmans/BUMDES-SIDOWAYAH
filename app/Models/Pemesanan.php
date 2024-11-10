<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = [
        'user_id', 'spot_id', 'tanggal', 'jam', 'resi_code', 'is_confirmed',
    ];

    public function spot()
    {
        return $this->belongsTo(Spot::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
