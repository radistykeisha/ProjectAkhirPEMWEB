@extends('layouts.app')

@section('title', 'Beranda - Batik Singhasari')

@section('content')
<div class="container">
    <!-- Hero Section -->
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card bg-primary text-white shadow-lg border-0">
                <div class="card-body text-center p-5">
                    <h1 class="display-4 fw-bold mb-3">
                        <i class="bi bi-flower1"></i> Batik Singhasari
                    </h1>
                    <p class="lead mb-4">Platform Digital untuk UMKM Batik Khas Malang</p>
                    <p class="mb-4">Melestarikan budaya tradisional melalui teknologi modern</p>
                    <div class="d-flex gap-3 justify-content-center">
                        <a href="{{ route('store-profile.show') }}" class="btn btn-light btn-lg">
                            <i class="bi bi-shop"></i> Lihat Profil Toko
                        </a>
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg">
                                <i class="bi bi-box-arrow-in-right"></i> Login Admin
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="row g-4 mb-5">
        <div class="col-md-12 text-center mb-4">
            <h2 class="fw-bold">Fitur Aplikasi</h2>
            <p class="text-muted">Kemudahan dalam mengelola dan mempromosikan batik Malang</p>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="bi bi-person-circle fs-1 text-primary mb-3"></i>
                    <h5 class="card-title">Autentikasi & Login</h5>
                    <p class="card-text text-muted">Sistem login aman untuk admin dan pemilik toko dengan session management</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="bi bi-shop-window fs-1 text-success mb-3"></i>
                    <h5 class="card-title">Profil Toko</h5>
                    <p class="card-text text-muted">Kelola informasi toko, kontak, lokasi, dan logo untuk meningkatkan profesionalisme</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="bi bi-grid-3x3 fs-1 text-warning mb-3"></i>
                    <h5 class="card-title">Kategori Produk</h5>
                    <p class="card-text text-muted">Klasifikasi batik berdasarkan jenis dan motif untuk navigasi lebih mudah</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="bi bi-images fs-1 text-info mb-3"></i>
                    <h5 class="card-title">Katalog Produk</h5>
                    <p class="card-text text-muted">Upload dan kelola foto produk batik dengan informasi lengkap</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="bi bi-megaphone fs-1 text-danger mb-3"></i>
                    <h5 class="card-title">Promo & Pengumuman</h5>
                    <p class="card-text text-muted">Posting penawaran khusus dan informasi terbaru untuk pelanggan</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="bi bi-star-fill fs-1 text-warning mb-3"></i>
                    <h5 class="card-title">Review & Testimoni</h5>
                    <p class="card-text text-muted">Pelanggan dapat memberikan ulasan untuk membangun kepercayaan</p>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-5">
                    <h3 class="text-center mb-4">Tentang Batik Singhasari</h3>
                    <p class="text-muted text-center">
                        Batik Singhasari adalah platform digital yang dikembangkan untuk mendukung UMKM batik khas Malang. 
                        Dengan menerapkan model bisnis Direct-to-Consumer (D2C), kami membantu menghubungkan langsung 
                        pengrajin batik dengan pelanggan, mengurangi hambatan informasi, dan meningkatkan transparansi produk.
                    </p>
                    <p class="text-muted text-center mb-0">
                        Proyek ini merupakan bagian dari upaya digitalisasi warisan budaya agar batik Malang 
                        tetap relevan dan kompetitif di era digital.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection