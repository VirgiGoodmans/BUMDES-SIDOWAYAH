@extends('layout.app')

@section('title', 'Manajemen Berita')

@section('content')
<div class="container">
    <h2>Daftar Berita</h2>
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>
    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $item)
            <tr>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->tanggal_terbit->format('d M Y') }}</td>
                <td>
                    <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
