@extends('layout.app')

@section('title', 'Beranda')

@section('content')
    <!-- Sliding News -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/EventSlideBanner_2024_10_11_0000.png') }}" class="d-block w-100" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/EventSlideBanner_2024_10_11_0001.png') }}" class="d-block w-100" alt="Banner 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/EventSlideBanner_2024_10_11_0002.png') }}" class="d-block w-100" alt="Banner 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/EventSlideBanner_2024_10_11_0003.png') }}" class="d-block w-100" alt="Banner 4">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Profil Desa Singkat -->
    <div class="container mt-5">
        <div class="row">
            <!-- Bagian Kiri (Teks) -->
            <div class="col-md-6">
                <h3>Profil Singkat Desa</h3>
                <p>
                    Sidowayah adalah sebuah desa wisata yang berada di kecamatan Polanharjo, kabupaten Klaten, provinsi Jawa Tengah. Desa yang memiliki luas 224,4180 hektare dan dihuni oleh lebih dari 3500 jiwa ini memiliki tempat wisata mata air dan tradisional yang sangat indah. Tak hanya wisata, Sidowayah juga memiliki sederet UMKM lokal yang sangat menarik.
                </p>
            </div>
            <!-- Bagian Kanan (Gambar) -->
            <div class="col-md-6">
                <img src="{{ asset('images/SidowayahMap.png') }}" class="img-fluid" alt="Peta Sidowayah">
            </div>
        </div>
    </div>
    <!-- Newest Info -->
    <div class="mt-5">
        <h3>Info Terbaru</h3>
        <ul class="list-group">
            @foreach($news as $item)
                <li class="list-group-item">
                    <a href="{{ url('news/'.$item->id) }}">{{ $item->judul }}</a> - {{ $item->tanggal_terbit }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
