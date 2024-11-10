@extends('layout.app')

@section('title', 'Edit Pemesanan - Admin')

@section('content')
<div class="container">
    <h2>Edit Pemesanan</h2>
    <form action="{{ route('admin.pemesanan.update', $pemesanan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Status Pemesanan</label>
            <select name="status" class="form-control">
                <option value="Pending" {{ $pemesanan->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Diterima" {{ $pemesanan->status == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                <option value="Ditolak" {{ $pemesanan->status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update Pemesanan</button>
    </form>
</div>
@endsection
