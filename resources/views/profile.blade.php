@extends('layout.app')

@section('title', 'Profil')

@section('content')
<div class="container mt-5">
    <h2>Profil Desa Sidowayah</h2>
    <p>Desa Sidowayah merupakan desa wisata yang kaya akan budaya dan wisata alam. Beberapa tempat wisata favorit di desa ini adalah Siblarak, Umbul Kemanten, dan Kampung Dolanan.</p>
    <p>Selain itu, desa ini juga memiliki beberapa UMKM lokal yang menghasilkan produk berkualitas seperti kain lurik dari Lurik Kanjeng Mami dan pusat oleh-oleh di Sidowayah Mart.</p>
    <img src="{{ asset('images/desa_profil.jpg') }}" class="img-fluid mb-4" alt="Desa Sidowayah">

    @if(Auth::check())
        <h3>Profil Pengguna</h3>
        <p>Nama: {{ Auth::user()->name }}</p>
        <p>Email: {{ Auth::user()->email }}</p>
        <p>Role: {{ Auth::user()->role }}</p>
    @endif
</div>
@endsection
