@extends('layout.app')

@section('title', 'News')

@section('content')
<div class="container mt-5">
    <h2>Berita Desa Sidowayah</h2>
    <p>Berikut adalah kumpulan berita terbaru dari desa wisata Sidowayah. Klik judul berita untuk membaca lebih lanjut.</p>

    <ul class="list-group">
        @foreach($news as $item)
            <li class="list-group-item">
                <a href="{{ url('news/'.$item->id) }}">{{ $item->judul }}</a> - {{ $item->tanggal_terbit }}
            </li>
        @endforeach
    </ul>
</div>
@endsection
