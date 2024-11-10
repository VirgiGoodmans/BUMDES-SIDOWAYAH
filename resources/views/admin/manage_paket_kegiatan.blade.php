@extends('layout.app')

@section('title', 'Kelola Paket Kegiatan')

@section('content')
<div class="container">
    <h2 class="my-4">Kelola Paket Kegiatan</h2>
    <a href="{{ url('admin/manage-paket-kegiatan/create') }}" class="btn btn-success mb-4">Tambah Paket Baru</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Paket</th>
                <th>Tipe</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pakets as $paket)
            <tr>
                <td>{{ $paket->nama_paket }}</td>
                <td>{{ $paket->tipe }}</td>
                <td>Rp {{ number_format($paket->harga) }}</td>
                <td>
                    <a href="{{ url('admin/manage-paket-kegiatan/'.$paket->id.'/edit') }}" class="btn btn-warning">Edit</a>
                    <form action="{{ url('admin/manage-paket-kegiatan/'.$paket->id) }}" method="POST" style="display:inline-block;">
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
