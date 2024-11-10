@extends('layout.app')

@section('title', 'Daftar Pemesanan - Admin')

@section('content')
<div class="container">
    <h2>Daftar Pemesanan</h2>
    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Spot</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Kode Resi</th>
                <th>Konfirmasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemesanan as $item)
            <tr>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->spot->nama_spot }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->jam }}</td>
                <td>{{ $item->resi_code ?? '-' }}</td>
                <td>{{ $item->is_confirmed ? 'Terkonfirmasi' : 'Belum Terkonfirmasi' }}</td>
                <td>
                    <a href="{{ route('admin.pemesanan.show', $item->id) }}" class="btn btn-primary">Lihat</a>
                    <a href="{{ route('admin.pemesanan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.pemesanan.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
