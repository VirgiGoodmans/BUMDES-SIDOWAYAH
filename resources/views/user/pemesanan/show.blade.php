@extends('layout.app')

@section('title', 'Detail Pemesanan Saya')

@section('content')
<div class="container">
    <h2>Detail Pemesanan</h2>
    <p><strong>Spot:</strong> {{ $pemesanan->spot->nama_spot }}</p>
    <p><strong>Tanggal:</strong> {{ $pemesanan->tanggal }}</p>
    <p><strong>Jam:</strong> {{ $pemesanan->jam }}</p>
    <p><strong>Status:</strong> {{ $pemesanan->status }}</p>
    <a href="{{ route('user.pemesanan.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Pemesanan</a>
</div>
@endsection
