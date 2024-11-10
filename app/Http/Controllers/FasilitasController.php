<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use App\Models\PaketKegiatan;

class FasilitasController extends Controller
{
    // Menampilkan semua fasilitas untuk satu paket kegiatan
    public function index($paketKegiatanId)
    {
        $paket = PaketKegiatan::findOrFail($paketKegiatanId);
        $fasilitas = Fasilitas::where('paket_kegiatan_id', $paketKegiatanId)->get();
        return view('fasilitas.index', compact('fasilitas', 'paket'));
    }

    // Menampilkan form untuk menambah fasilitas baru
    public function create($paketKegiatanId)
    {
        $paket = PaketKegiatan::findOrFail($paketKegiatanId);
        return view('fasilitas.create', compact('paket'));
    }

    // Menyimpan fasilitas baru untuk paket kegiatan
    public function store(Request $request, $paketKegiatanId)
    {
        $validated = $request->validate([
            'nama_fasilitas' => 'required|max:255',
            'deskripsi' => 'nullable',
        ]);

        Fasilitas::create([
            'nama_fasilitas' => $validated['nama_fasilitas'],
            'deskripsi' => $validated['deskripsi'],
            'paket_kegiatan_id' => $paketKegiatanId
        ]);

        return redirect()->route('fasilitas.index', $paketKegiatanId)->with('success', 'Fasilitas berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit fasilitas
    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.edit', compact('fasilitas'));
    }

    // Memperbarui data fasilitas
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_fasilitas' => 'required|max:255',
            'deskripsi' => 'nullable',
        ]);

        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->update($validated);

        return redirect()->route('fasilitas.index', $fasilitas->paket_kegiatan_id)->with('success', 'Fasilitas berhasil diperbarui');
    }

    // Menghapus fasilitas
    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();
        return redirect()->route('fasilitas.index', $fasilitas->paket_kegiatan_id)->with('success', 'Fasilitas berhasil dihapus');
    }
}
