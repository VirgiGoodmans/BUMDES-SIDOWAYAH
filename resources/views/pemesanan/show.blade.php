@extends('layout.app')

@section('title', 'Detail Pemesanan')

@section('content')
    <div class="container mt-5">
        <h1>Detail Pemesanan</h1>
        <p>Nama: {{ $pemesanan->nama }}</p>
        <p>Email: {{ $pemesanan->email }}</p>
        <p>Tanggal: {{ $pemesanan->tanggal }}</p>
        <p>Spot: {{ $pemesanan->spot->nama_spot }}</p>
        <a href="{{ route('pemesanan.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
