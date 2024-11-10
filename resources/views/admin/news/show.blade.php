@extends('layout.app')

@section('title', $news->judul)

@section('content')
<div class="container">
    <h2>{{ $news->judul }}</h2>
    <p><small>{{ $news->tanggal_terbit->format('d M Y') }}</small></p>
    <img src="{{ asset('images/' . $news->gambar) }}" alt="{{ $news->judul }}" class="img-fluid mb-4">
    <p>{{ $news->konten }}</p>
    <a href="{{ route('admin.news.edit', $news->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('admin.news.destroy', $news->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
</div>
@endsection
