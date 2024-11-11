@extends('layout.app')

@section('title', 'Tambah Fasilitas')

@section('content')
<div class="container">
    <h2>Tambah Fasilitas di {{ $wisata->nama_wisata }}</h2>
    <form action="{{ route('fasilitas.store', [$wisata->id, $paket->id]) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
            <input type="text" class="form-control" name="nama_fasilitas" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi"></textarea>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control"Here is the continuation and completion of the code:

**`resources/views/admin/fasilitas/create.blade.php` (continued):**

```blade
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
