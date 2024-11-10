@extends('layout.app')

@section('title', 'Tambah Berita')

@section('content')
<div class="container">
    <h2>Tambah Berita Baru</h2>
    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Konten</label>
            <textarea name="konten" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Tanggal Terbit</label>
            <input type="date" name="tanggal_terbit" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan Berita</button>
    </form>
</div>
@endsection
