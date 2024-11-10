@extends('layout.app')

@section('title', 'UMKM Lokal')

@section('content')
<div class="container mt-5">
    <h2>UMKM Lokal</h2>
    <p>Produk-produk UMKM yang berasal dari Desa Sidowayah dan sekitarnya.</p>

    <div class="row">
        <div class="col-md-6">
            <h3>Sidowayah Mart</h3>
            <p>Pusat oleh-oleh khas Sidowayah dengan berbagai macam produk lokal.</p>
            <img src="{{ asset('images/sidowayah_mart.jpg') }}" class="img-fluid mb-4" alt="Sidowayah Mart">
        </div>
        <div class="col-md-6">
            <h3>Lurik Kanjeng Mami</h3>
            <p>Produk kain lurik tradisional dengan sentuhan modern.</p>
            <img src="{{ asset('images/lurik_kanjeng_mami.jpg') }}" class="img-fluid mb-4" alt="Lurik Kanjeng Mami">
        </div>
    </div>

    <a href="{{ url('/') }}" class="btn btn-secondary">Kembali ke Beranda</a>
</div>
@endsection
