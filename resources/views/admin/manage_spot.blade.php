@extends('layout.app')

@section('title', 'Kelola Spot')

@section('content')
<div class="container">
    <h2 class="my-4">Kelola Spot di Wisata</h2>
    <a href="{{ url('admin/manage-spot/create') }}" class="btn btn-success mb-4">Tambah Spot Baru</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Spot</th>
                <th>Wisata</th>
                <th>Kapasitas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($spots as $spot)
            <tr>
                <td>{{ $spot->nama_spot }}</td>
                <td>{{ $spot->wisata->nama_wisata }}</td>
                <td>{{ $spot->kapasitas }}</td>
                <td>
                    <a href="{{ url('admin/manage-spot/'.$spot->id.'/edit') }}" class="btn btn-warning">Edit</a>
                    <form action="{{ url('admin/manage-spot/'.$spot->id) }}" method="POST" style="display:inline-block;">
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
