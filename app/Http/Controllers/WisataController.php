<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Spot;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    #public function show($id)
    #{
        #$wisata = Wisata::with('fasilitas')->find($id); // Ambil data wisata beserta fasilitasnya
        #if (!$wisata) {
            #abort(404, 'Wisata tidak ditemukan'); // Menghindari error jika data tidak ditemukan
        #}
        #return view('wisata.show', compact('wisata'));
    #}

    public function show($id)
    {
        $wisata = Wisata::findOrFail($id); // Mengambil data wisata berdasarkan ID atau mengembalikan 404 jika tidak ditemukan
        return view('wisata.show', compact('wisata'));
    }

}
