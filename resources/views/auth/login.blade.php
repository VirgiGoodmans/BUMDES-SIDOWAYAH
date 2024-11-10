@extends('layout.app')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="text-center mb-4">Login</h2>
        <form method="POST" action="{{ route('login') }}"> <!-- Memastikan action mengarah ke rute 'login' -->
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="{{ route('register') }}" class="btn btn-link">Register</a>
                <a href="{{ route('login.google') }}" class="btn btn-primary">Sign in with Google</a>
            </div>
        </form>
    </div>
</div>
@endsection
