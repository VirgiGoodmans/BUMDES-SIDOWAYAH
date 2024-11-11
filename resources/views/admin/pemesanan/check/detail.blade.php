@extends('layout.app')

@section('title', 'Detail Pemesanan')

@section('content')
<div class="container">
    <h2>Detail Pemesanan</h2>

    @if($pemesanan)
        <p><strong>Nama Pemesan:</strong> {{ $pemesanan->user->name }}</p>
        <p><strong>Spot:</strong> {{ $pemesanan->spot->nama_spot }}</p>
        <p><strong>Tanggal:</strong> {{ $pemesanan->tanggal }}</p>
        <p><strong>Jam:</strong> {{ $pemesanan->jam }}</p>
        <p><strong>Kode Resi:</strong> {{ $pemesanan->resi_code }}</p>
    @else
        <p>Pemesanan tidak ditemukan.</p>
    @endif
</div>
@endsection
