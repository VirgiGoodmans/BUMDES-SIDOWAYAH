@extends('layout.app')

@section('title', 'Daftar Fasilitas')

@section('content')
<div class="container">
    <h2>Daftar Fasilitas untuk {{ $wisata->nama_wisata }}</h2>
    <ul>
        @foreach($fasilitas as $item)
            <li>
                <h4>{{ $item->nama_fasilitas }} - Rp{{ number_format($item->harga, 2) }}</h4>
                <p>{{ $item->deskripsi }}</p>
                <a href="{{ route('fasilitas.edit', [$wisata->id, $item->id]) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('fasilitas.destroy', [$wisata->id, $item->id]) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('fasilitas.create', [$wisata->id, $paket->id]) }}" class="btn btn-success">Tambah Fasilitas</a>
</div>
@endsection
