@extends('layout.app')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
<div class="container text-center mt-5">
    <h1 class="display-1 text-danger">404</h1>
    <h2>Oops! Halaman Tidak Ditemukan</h2>
    <p>Maaf, halaman yang Anda cari tidak ditemukan. Mungkin halaman tersebut telah dihapus atau alamat URL yang Anda masukkan salah.</p>
    <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Beranda</a>
</div>
@endsection
