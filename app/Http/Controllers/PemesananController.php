<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Spot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    // Menampilkan form pemesanan
    public function index()
    {
        $spots = Spot::all(); // Mengambil semua spot
        return view('pemesanan.index', compact('spots'));
    }

    // Menyimpan pemesanan baru
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'jam' => 'required|string',
            'spot_id' => 'required|exists:spots,id',
        ]);

        // Cek apakah spot sudah dipesan di waktu yang dipilih
        $exists = Pemesanan::where('spot_id', $request->spot_id)
            ->where('tanggal', $request->tanggal)
            ->where('jam', $request->jam)
            ->exists();

        if ($exists) {
            return back()->withErrors(['error' => 'Spot sudah dipesan pada waktu tersebut.']);
        }

        // Simpan pemesanan
        Pemesanan::create([
            'user_id' => Auth::id(),
            'spot_id' => $request->spot_id,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
        ]);

        return redirect()->route('pemesanan.success');
    }

    // Menampilkan halaman sukses pemesanan
    public function success()
    {
        return view('pemesanan.success');
    }
}
