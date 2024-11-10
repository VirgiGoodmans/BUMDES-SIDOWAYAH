@extends('layout.app')

@section('title', 'Buat Pemesanan Baru')

@section('content')
<div class="container">
    <h2>Buat Pemesanan</h2>
    <form action="{{ route('user.pemesanan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Pilih Spot</label>
            <select name="spot_id" class="form-control">
                @foreach($spots as $spot)
                    <option value="{{ $spot->id }}">{{ $spot->nama_spot }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jam</label>
            <input type="time" name="jam" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Pesan</button>
    </form>
</div>
@endsection
