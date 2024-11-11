<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use App\Models\PaketKegiatan;
use App\Models\Wisata;

class FasilitasController extends Controller
{
    public function index($wisataId, $paketKegiatanId)
    {
        $wisata = Wisata::findOrFail($wisataId);
        $paket = PaketKegiatan::findOrFail($paketKegiatanId);
        $fasilitas = Fasilitas::where('paket_kegiatan_id', $paketKegiatanId)
            ->where('wisata_id', $wisataId)->get();
        return view('admin.fasilitas.index', compact('fasilitas', 'paket', 'wisata'));
    }

    public function create($wisataId, $paketKegiatanId)
    {
        $wisata = Wisata::findOrFail($wisataId);
        $paket = PaketKegiatan::findOrFail($paketKegiatanId);
        return view('admin.fasilitas.create', compact('paket', 'wisata'));
    }

    public function store(Request $request, $wisataId, $paketKegiatanId)
    {
        $validated = $request->validate([
            'nama_fasilitas' => 'required|max:255',
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric'
        ]);

        Fasilitas::create([
            'nama_fasilitas' => $validated['nama_fasilitas'],
            'deskripsi' => $validated['deskripsi'],
            'harga' => $validated['harga'],
            'paket_kegiatan_id' => $paketKegiatanId,
            'wisata_id' => $wisataId
        ]);

        return redirect()->route('fasilitas.index', [$wisataId, $paketKegiatanId])->with('success', 'Fasilitas berhasil ditambahkan');
    }

    public function edit($wisataId, $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $wisata = Wisata::findOrFail($wisataId);
        return view('admin.fasilitas.edit', compact('fasilitas', 'wisata'));
    }

    public function update(Request $request, $wisataId, $id)
    {
        $validated = $request->validate([
            'nama_fasilitas' => 'required|max:255',
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric'
        ]);

        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->update($validated);

        return redirect()->route('fasilitas.index', [$wisataId, $fasilitas->paket_kegiatan_id])->with('success', 'Fasilitas berhasil diperbarui');
    }

    public function destroy($wisataId, $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();
        return redirect()->route('fasilitas.index', [$wisataId, $fasilitas->paket_kegiatan_id])->with('success', 'Fasilitas berhasil dihapus');
    }
}
