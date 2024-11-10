@extends('layout.app')

@section('title', 'Wisata Siblarak')

@section('content')
<div class="container mt-5">
    <!-- Bagian Tengah: Gambar dan Judul -->
    <div class="text-center">
        <img src="{{ asset('images/ProfileSiblarak.png') }}" class="img-fluid" alt="Siblarak">
        <h2 style="font-family: Arial, sans-serif; font-weight: bold;">D'New Siblarak</h2>
    </div>

    <!-- Bagian Sekilas Info: Kanan teks, kiri gambar -->
    <div class="row mt-4">
        <div class="col-md-6">
            <img src="{{ asset('images/SiblarakDetail1.png') }}" class="img-fluid" alt="Siblarak">
        </div>
        <div class="col-md-6">
            <p>
                Wisata air ini jadi salah satu destinasi hits di Desa Sidowayah, Klaten. Dibangun oleh pemerintah desa tahun 2017, mulai dikelola serius tahun 2018, dan dibuka untuk umum pada awal 2019. Info menarik, terdapat 2 kolam: untuk anak kecil dengan kedalaman 50 cm, dan untuk orang dewasa dengan kedalaman 1,5 – 2 meter.
            </p>
        </div>
    </div>

    <!-- Fasilitas: Kiri teks, kanan gambar -->
    <div class="row mt-4">
        <div class="col-md-6">
            <p>
                Di Siblarak terdapat Istana Kendati Negara yang merupakan replika Istana Negara di Jakarta. Selain itu, Siblarak juga memiliki 3 kolam mata air menyegarkan, kawasan perkemahan, dan tantangan outbond. Siblarak juga memiliki banyak UMKM lokal yang menjual makanan lezat setelah puas menjelajahi area wisata.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/SiblarakDetail2.png') }}" class="img-fluid" alt="Siblarak Fasilitas">
        </div>
    </div>

    <!-- Booking Spot -->
    <div class="mt-5">
        <h3>Booking Spot</h3>
        <ul class="list-group">
            @foreach($spots as $spot)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $spot->nama_spot }}
                    <span class="badge bg-primary rounded-pill">Kapasitas: {{ $spot->kapasitas }}</span>
                    <a href="{{ route('pemesanan.create', $spot->id) }}" class="btn btn-success">Pesan</a>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Button untuk Booking -->
    <div class="text-center mt-5">
        <a href="/pemesanan" class="btn btn-danger btn-lg">Tertarik untuk Booking tempat? Order sekarang!</a>
    </div>
</div>
@endsection
