@extends('layout.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container">
    <h2 class="my-4">Admin Dashboard</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Kelola Wisata</h5>
                    <a href="{{ url('admin/manage-wisata') }}" class="btn btn-primary">Kelola</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Kelola Spot</h5>
                    <a href="{{ url('admin/manage-spot') }}" class="btn btn-primary">Kelola</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Kelola Paket Kegiatan</h5>
                    <a href="{{ url('admin/manage-paket-kegiatan') }}" class="btn btn-primary">Kelola</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Kelola Pemesanan</h5>
                    <a href="{{ url('admin/manage-pemesanan') }}" class="btn btn-primary">Kelola</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
