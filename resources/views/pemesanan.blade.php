@extends('layout.app')

@section('title', 'Status Pemesanan')

@section('content')
<div class="container mt-5">
    <h2>Status Pemesanan Saya</h2>
    <p>Berikut adalah status pemesanan Anda di berbagai wisata atau paket kegiatan di Desa Sidowayah.</p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Wisata / Paket</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Status</th>
                <th>Surat Izin</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemesanan as $pesan)
            <tr>
                <td>{{ $pesan->wisata ? $pesan->wisata->nama_wisata : $pesan->paket->nama_paket }}</td>
                <td>{{ $pesan->tanggal }}</td>
                <td>{{ $pesan->jam }}</td>
                <td>{{ ucfirst($pesan->status) }}</td>
                <td>
                    @if($pesan->status == 'disetujui')
                        <a href="{{ url('surat/'.$pesan->id) }}" class="btn btn-success">Download Surat Izin</a>
                    @else
                        <span class="text-muted">Menunggu Konfirmasi</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
