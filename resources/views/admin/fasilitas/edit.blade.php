@extends('layout.app')

@section('title', 'Edit Fasilitas')

@section('content')
<div class="container">
    <h2>Edit Fasilitas di {{ $wisata->nama_wisata }}</h2>
    <form action="{{ route('fasilitas.update', [$wisata->id, $fasilitas->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
            <input type="text" class="form-control" name="nama_fasilitas" value="{{ $fasilitas->nama_fasilitas }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi">{{ $fasilitas->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga" value="{{ $fasilitas->harga }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
