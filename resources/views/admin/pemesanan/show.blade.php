@extends('layout.app')

@section('title', 'Detail Pemesanan - Admin')

@section('content')
<div class="container">
    <h2>Detail Pemesanan</h2>
    <p><strong>User:</strong> {{ $pemesanan->user->name }}</p>
    <p><strong>Spot:</strong> {{ $pemesanan->spot->nama_spot }}</p>
    <p><strong>Tanggal:</strong> {{ $pemesanan->tanggal }}</p>
    <p><strong>Jam:</strong> {{ $pemesanan->jam }}</p>
    <p><strong>Status:</strong> {{ $pemesanan->status }}</p>
    <a href="{{ route('admin.pemesanan.edit', $pemesanan->id) }}" class="btn btn-warning">Edit</a>
</div>
@endsection
