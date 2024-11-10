@extends('layout.app')

@section('title', $news->judul)

@section('content')
<div class="container">
    <h2>{{ $news->judul }}</h2>
    <p><small>{{ $news->tanggal_terbit->format('d M Y') }}</small></p>
    <img src="{{ asset('images/' . $news->gambar) }}" alt="{{ $news->judul }}" class="img-fluid mb-4">
    <p>{{ $news->konten }}</p>
</div>
@endsection
