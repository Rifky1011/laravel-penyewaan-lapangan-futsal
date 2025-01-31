@extends('layouts.app')

@section('title', 'Sewa Lapangan Futsal')

@section('content')
<div class="hero bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Selamat Datang di Sewa Lapangan Futsal</h1>
        <p class="lead">Tempat terbaik untuk menyewa lapangan futsal dengan mudah dan cepat.</p>
        @guest
            <a href="{{ route('login') }}" class="btn btn-light btn-lg">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">Daftar</a>
        @endguest
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center">Lapangan yang Tersedia</h2>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <img src="https://source.unsplash.com/400x250/?futsal" class="card-img-top" alt="Lapangan Futsal">
                <div class="card-body">
                    <h5 class="card-title">Lapangan A</h5>
                    <p class="card-text">Lapangan indoor dengan rumput sintetis berkualitas.</p>
                    <a href="#" class="btn btn-primary">Sewa Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
