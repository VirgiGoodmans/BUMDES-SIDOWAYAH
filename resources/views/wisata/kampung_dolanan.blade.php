@extends('layout.app')

@section('title', 'Umbul Kemanten')

@section('content')
<div class="container mt-5">
    <!-- Bagian Tengah: Gambar dan Judul -->
    <div class="text-center">
        <img src="{{ asset('images/ProfileKemanten.png') }}" class="img-fluid" alt="Umbul Kemanten">
        <h2 style="font-family: Arial, sans-serif; font-weight: bold;">Umbul Kemanten</h2>
    </div>

    <!-- Bagian Sekilas Info: Kanan teks, kiri gambar -->
    <div class="row mt-4">
        <div class="col-md-6">
            <img src="{{ asset('images/KemantenDetail1.png') }}" class="img-fluid" alt="Umbul Kemanten">
        </div>
        <div class="col-md-6">
            <p>
                Umbul Kemanten menghadirkan wisata mata air alami yang sangat menyegarkan. Disini, kalian bisa merasakan nikmatnya makan belut sambil mengapung di mata air yang asri.
            </p>
        </div>
    </div>

    <!-- Fasilitas: Kiri teks, kanan gambar -->
    <div class="row mt-4">
        <div class="col-md-6">
            <p>
                Di Kemanten terdapat berbagai macam kolam mata air, baik yang modern maupun yang alami. Kolam modern menawarkan air jernih tanpa kaporit, sementara kolam alami masih memiliki kehidupan di dalamnya. Kemanten juga memiliki banyak UMKM lokal yang menyediakan makanan lezat untuk disantap setelah berenang.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/KemantenDetail2.png') }}" class="img-fluid" alt="Fasilitas Kemanten">
        </div>
    </div>

    <!-- Button untuk Booking -->
    <div class="text-center mt-5">
        <a href="/pemesanan" class="btn btn-danger btn-lg">Tertarik untuk Booking tempat acara? Order sekarang!</a>
    </div>
</div>
@endsection
