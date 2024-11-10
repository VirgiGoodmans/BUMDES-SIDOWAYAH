@extends('layout.app')

@section('title', 'Edit Berita')

@section('content')
<div class="container">
    <h2>Edit Berita</h2>
    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $news->judul }}" required>
        </div>
        <div class="form-group">
            <label>Konten</label>
            <textarea name="konten" class="form-control" required>{{ $news->konten }}</textarea>
        </div>
        <div class="form-group">
            <label>Tanggal Terbit</label>
            <input type="date" name="tanggal_terbit" class="form-control" value="{{ $news->tanggal_terbit->format('Y-m-d') }}" required>
        </div>
        <div class="form-group">
            <label>Gambar (opsional)</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Berita</button>
    </form>
</div>
@endsection
