@extends('layout.app')

@section('title', 'Kelola Wisata')

@section('content')
<div class="container">
    <h2 class="my-4">Kelola Wisata</h2>
    <a href="{{ url('admin/manage-wisata/create') }}" class="btn btn-success mb-4">Tambah Wisata Baru</a>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Wisata</th>
                <th>Lokasi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($wisata as $w)
            <tr>
                <td>{{ $w->nama_wisata }}</td>
                <td>{{ $w->lokasi }}</td>
                <td>Rp {{ number_format($w->harga) }}</td>
                <td>
                    <a href="{{ url('admin/manage-wisata/'.$w->id.'/edit') }}" class="btn btn-warning">Edit</a>
                    <form action="{{ url('admin/manage-wisata/'.$w->id) }}" method="POST" style="display:inline-block;">
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
