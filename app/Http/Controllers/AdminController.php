<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Spot;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $wisata = Wisata::all();
        return view('admin.dashboard', compact('wisata'));
    }

    public function manageWisata()
    {
        $wisata = Wisata::all();
        return view('admin.manage_wisata', compact('wisata'));
    }

    public function manageSpot($wisataId)
    {
        $spots = Spot::where('wisata_id', $wisataId)->get();
        return view('admin.manage_spot', compact('spots'));
    }

    public function managePemesanan()
    {
        $pemesanan = Pemesanan::all();
        return view('admin.manage_pemesanan', compact('pemesanan'));
    }

    // Konfirmasi Pemesanan dan Generate Resi Code
    public function confirmPemesanan($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->is_confirmed = true;
        $pemesanan->resi_code = strtoupper(uniqid('RESI-'));
        $pemesanan->save();

        return redirect()->back()->with('success', 'Pemesanan berhasil dikonfirmasi dengan resi ' . $pemesanan->resi_code);
    }

    // Fungsi Cek Resi
    public function checkResi(Request $request)
    {
        $pemesanan = Pemesanan::where('resi_code', $request->resi_code)->first();

        if ($pemesanan) {
            return view('admin.pemesanan.detail', compact('pemesanan'));
        } else {
            return redirect()->back()->with('error', 'Kode resi tidak ditemukan');
        }
    }
}
