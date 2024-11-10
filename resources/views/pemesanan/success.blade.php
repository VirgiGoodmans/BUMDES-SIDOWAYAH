@extends('layout.app')

@section('title', 'Pemesanan Berhasil')

@section('content')
    <div class="container mt-5 text-center">
        <h1>Pemesanan Berhasil!</h1>
        <p>Terima kasih, pesanan Anda telah berhasil dibuat. Kami akan segera menghubungi Anda untuk informasi lebih lanjut.</p>
        <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke Beranda</a>
    </div>
@endsection
