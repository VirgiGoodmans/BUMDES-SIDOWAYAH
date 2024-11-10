@extends('layout.app')

@section('title', $wisata->nama)

@section('content')
<div class="container mt-5">
    <div class="text-center">
        <h1>{{ $wisata->nama }}</h1>
        <img src="{{ asset('images/' . $wisata->gambar) }}" class="img-fluid my-4" alt="{{ $wisata->nama }}">
    </div>

    <p>{{ $wisata->deskripsi }}</p>

    <!-- Fasilitas atau fitur lainnya -->
    <h3>Fasilitas</h3>
    <ul>
        @foreach($wisata->fasilitas as $fasilitas)
            <li>{{ $fasilitas->nama_fasilitas }} - {{ $fasilitas->deskripsi }}</li>
        @endforeach
    </ul>

    <!-- Button Booking jika tersedia -->
    <a href="{{ route('pemesanan.index', $wisata->id) }}" class="btn btn-primary mt-4">Pesan Tempat</a>
</div>
@endsection
