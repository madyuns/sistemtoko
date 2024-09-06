@extends('layouts.app')

@section('stayles')
<style>
    .fullscreen-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        z-index: -1;
    }

    /* Custom styles for centering content */
    .center-content {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Menyesuaikan tinggi konten dengan tinggi layar */
    }
</style>
@endsection

@section('content')
<div class="fullscreen-bg" style="background-image: url('{{ asset('images/shop.jpg') }}')"></div>

<div class="container">
    <div class="row justify-content-center center-content">
        <div class="col-md-8">
            <!-- Konten Anda disini -->
            <div class="card">
                <div class="card-header">Welcome to Our Shop</div>

                <div class="card-body">
                    <!-- Isi dari halaman Anda -->
                    <p>Ini adalah halaman utama toko</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
