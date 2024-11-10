@extends('layout.app')

@section('title', 'Arsip Berita')

@section('content')
<div class="container">
    <h2>Arsip Berita - {{ $year }}{{ isset($month) ? ' Bulan ' . $month : '' }}</h2>
    <ul class="list-group">
        @foreach($news as $item)
            <li class="list-group-item">
                <a href="{{ route('news.show', $item->id) }}">{{ $item->judul }}</a>
                <small class="text-muted">{{ $item->tanggal_terbit->format('d M Y') }}</small>
            </li>
        @endforeach
    </ul>
</div>
@endsection
