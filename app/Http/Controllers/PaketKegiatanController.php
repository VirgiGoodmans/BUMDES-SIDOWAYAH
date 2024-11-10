<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketKegiatan;

class PaketKegiatanController extends Controller
{
    // Menampilkan semua paket kegiatan
    public function index()
    {
        $paketKegiatan = PaketKegiatan::all();
        return view('paket_kegiatan.index', compact('paketKegiatan'));
    }

    // Menampilkan form untuk membuat paket kegiatan baru
    public function create()
    {
        return view('paket_kegiatan.create');
    }

    // Menyimpan paket kegiatan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_paket' => 'required|max:255',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'tipe' => 'nullable|string'
        ]);

        PaketKegiatan::create($validated);
        return redirect()->route('paket_kegiatan.index')->with('success', 'Paket kegiatan berhasil ditambahkan');
    }

    // Menampilkan detail satu paket kegiatan
    public function show($id)
    {
        $paket = PaketKegiatan::findOrFail($id);
        return view('paket_kegiatan.show', compact('paket'));
    }

    // Menampilkan form untuk mengedit paket kegiatan
    public function edit($id)
    {
        $paket = PaketKegiatan::findOrFail($id);
        return view('paket_kegiatan.edit', compact('paket'));
    }

    // Memperbarui data paket kegiatan
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_paket' => 'required|max:255',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'tipe' => 'nullable|string'
        ]);

        $paket = PaketKegiatan::findOrFail($id);
        $paket->update($validated);
        return redirect()->route('paket_kegiatan.index')->with('success', 'Paket kegiatan berhasil diperbarui');
    }

    // Menghapus paket kegiatan
    public function destroy($id)
    {
        $paket = PaketKegiatan::findOrFail($id);
        $paket->delete();
        return redirect()->route('paket_kegiatan.index')->with('success', 'Paket kegiatan berhasil dihapus');
    }
}
