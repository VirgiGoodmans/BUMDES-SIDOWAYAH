@extends('layout.app')

@section('title', 'Kelola Pemesanan')

@section('content')
<div class="container">
    <h2 class="my-4">Kelola Pemesanan</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Pemesan</th>
                <th>Wisata / Paket</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemesanan as $pesan)
            <tr>
                <td>{{ $pesan->user->name }}</td>
                <td>{{ $pesan->wisata ? $pesan->wisata->nama_wisata : $pesan->paket->nama_paket }}</td>
                <td>{{ $pesan->tanggal }}</td>
                <td>{{ ucfirst($pesan->status) }}</td>
                <td>
                    <a href="{{ url('admin/manage-pemesanan/'.$pesan->id.'/edit') }}" class="btn btn-warning">Edit</a>
                    <form action="{{ url('admin/manage-pemesanan/'.$pesan->id) }}" method="POST" style="display:inline-block;">
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
