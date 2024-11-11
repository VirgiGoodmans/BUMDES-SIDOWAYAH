@extends('layout.app')

@section('title', 'Cek Resi Pemesanan')

@section('content')
<div class="container">
    <h2>Cek Resi Pemesanan</h2>

    <form action="{{ route('admin.pemesanan.check') }}" method="GET">
        @csrf
        <div class="mb-3">
            <label for="resi_code" class="form-label">Masukkan Kode Resi</label>
            <input type="text" class="form-control" id="resi_code" name="resi_code" placeholder="Masukkan kode resi" required>
        </div>
        <button type="submit" class="btn btn-primary">Cari</button>
    </form>

    @if(session('pemesanan'))
        <div class="mt-4">
            <h3>Detail Pemesanan</h3>
            <p><strong>Nama Pemesan:</strong> {{ session('pemesanan')->user->name }}</p>
            <p><strong>Spot:</strong> {{ session('pemesanan')->spot->nama_spot }}</p>
            <p><strong>Tanggal:</strong> {{ session('pemesanan')->tanggal }}</p>
            <p><strong>Jam:</strong> {{ session('pemesanan')->jam }}</p>
            <p><strong>Kode Resi:</strong> {{ session('pemesanan')->resi_code }}</p>
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger mt-4">
            {{ session('error') }}
        </div>
    @endif
</div>
@endsection
