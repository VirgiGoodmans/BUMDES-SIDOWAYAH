@extends('layout.app')

@section('title', 'Daftar Pemesanan Saya')

@section('content')
<div class="container">
    <h2>Pemesanan Saya</h2>
    <ul class="list-group">
        @foreach($pemesanan as $item)
            <li class="list-group-item">
                <strong>Spot:</strong> {{ $item->spot->nama_spot }} -
                <strong>Tanggal:</strong> {{ $item->tanggal }} -
                <strong>Jam:</strong> {{ $item->jam }} -
                <strong>Status:</strong> {{ $item->status }}
                <a href="{{ route('user.pemesanan.show', $item->id) }}" class="btn btn-primary btn-sm float-end">Lihat</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
