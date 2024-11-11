@extends('layout.app')

@section('title', 'Pemesanan')

@section('content')
    <div class="container mt-5">
        <h1>Pemesanan Tempat</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Form Pemesanan -->
        <form action="{{ route('pemesanan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Pemesanan</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="spot_id" class="form-label">Pilih Spot</label>
                <select name="spot_id" class="form-control">
                    @foreach($spots as $spot)
                        <option value="{{ $spot->id }}">{{ $spot->nama_spot }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Pilihan Sesi -->
            <div class="mb-3">
                <label for="jam" class="form-label">Pilih Sesi</label>
                <select name="jam" class="form-control" required>
                    <option value="8AM-12.30PM">Sesi 1: 8AM - 12.30PM</option>
                    <option value="1PM-4PM">Sesi 2: 1PM - 4PM</option>
                </select>
            </div>

            <!-- Fasilitas Tambahan -->
            <div class="mb-3">
                <label class="form-label">Fasilitas Tambahan</label><br>
                <input type="checkbox" name="sound_system" value="1"> Sound System (+50k)<br>
                <input type="checkbox" name="tikar" value="1"> Tikar (+50k)
            </div>

            <!-- Minimal DP -->
            <div class="mb-3">
                <label for="dp" class="form-label">DP (Minimal 200k)</label>
                <input type="number" name="dp" class="form-control" required min="200000">
            </div>

            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
        </form>

        <!-- Menampilkan Menu BUMDES -->
        <div class="mt-5">
            <h2>Menu BUMDES Kemanten</h2>
            <img src="{{ asset('images/MenuBumdesKemanten.jpg') }}" alt="Menu BUMDES Kemanten" class="img-fluid">
        </div>
    </div>
@endsection
