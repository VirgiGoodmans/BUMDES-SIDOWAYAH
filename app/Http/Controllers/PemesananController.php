<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Spot;
use App\Models\PaketKegiatan;
use App\Models\PaketTambahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    // Menampilkan form pemesanan
    public function index()
    {
        $spots = Spot::all();
        $paketKegiatan = PaketKegiatan::all();
        $paketTambahan = PaketTambahan::all();
        return view('pemesanan.index', compact('spots', 'paketKegiatan', 'paketTambahan'));
    }

    // Menyimpan pemesanan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'jam' => 'required|string',
            'spot_id' => 'required|exists:spots,id',
            'paket_id' => 'required|exists:paket_kegiatan,id',
            'jumlah_peserta' => 'required|integer|min:30',
            'paket_tambahan' => 'array'
        ]);

        // Ambil harga paket
        $paketKegiatan = PaketKegiatan::findOrFail($validated['paket_id']);
        $totalBiaya = $validated['jumlah_peserta'] * $paketKegiatan->harga;

        // Hitung biaya tambahan untuk guru
        $biayaGuru = intdiv($validated['jumlah_peserta'], 10) * $paketKegiatan->harga;
        $totalBiaya += $biayaGuru;

        // Tambahkan harga paket tambahan
        if (!empty($validated['paket_tambahan'])) {
            $hargaTambahan = PaketTambahan::whereIn('id', $validated['paket_tambahan'])->sum('harga');
            $totalBiaya += $hargaTambahan * $validated['jumlah_peserta'];
        }

        // Simpan pemesanan
        $pemesanan = Pemesanan::create([
            'user_id' => Auth::id(),
            'spot_id' => $validated['spot_id'],
            'tanggal' => $validated['tanggal'],
            'jam' => $validated['jam'],
            'total_harga' => $totalBiaya,
        ]);

        // Simpan paket tambahan
        if (!empty($validated['paket_tambahan'])) {
            $pemesanan->paketTambahan()->attach($validated['paket_tambahan']);
        }

        return redirect()->route('pemesanan.success');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'jam' => 'required|string',
            'spot_id' => 'required|exists:spots,id',
            'dp' => 'required|integer|min:200000',
            'sound_system' => 'boolean',
            'tikar' => 'boolean',
        ]);

        $total = $validated['dp'];
        if ($request->sound_system) $total += 50000;
        if ($request->tikar) $total += 50000;

        Pemesanan::create([
            'user_id' => Auth::id(),
            'spot_id' => $request->spot_id,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'dp' => $validated['dp'],
            'sound_system' => $request->sound_system,
            'tikar' => $request->tikar,
            'total_harga' => $total,
        ]);

        return redirect()->route('pemesanan.success');
    }

    // Menampilkan halaman sukses pemesanan
    public function success()
    {
        return view('pemesanan.success');
    }
}
