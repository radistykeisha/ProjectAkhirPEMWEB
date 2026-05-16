<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog Produk Batik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Batik Singhasari</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Kategori Batik
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('katalog.index') }}">Semua</a>
                        </li>
                        @foreach($kategoris as $kat)
                        <li>
                            <a class="dropdown-item" href="{{ route('katalog.kategori', $kat->id) }}">
                                {{ $kat->nama_kategori }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h4>
        Katalog Produk Batik
        @isset($kategori)
            — {{ $kategori->nama_kategori }}
        @endisset
    </h4>

    <div class="row mt-3">
        @forelse($products as $product)
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                @if($product->gambar)
                    <img src="{{ $product->gambar }}" alt="{{ $product->nama_produk }}"
                         class="card-img-top" style="height:200px; object-fit:cover;">
                @else
                    <div class="bg-secondary d-flex align-items-center justify-content-center"
                         style="height:200px;">
                        <span class="text-white">No Image</span>
                    </div>
                @endif
                <div class="card-body">
                    <span class="badge bg-primary mb-1">
                        {{ $product->kategori->nama_kategori }}
                    </span>
                    <h6 class="card-title mt-1">{{ $product->nama_produk }}</h6>
                    <p class="text-muted small">{{ Str::limit($product->deskripsi, 60) }}</p>
                    <strong>Rp {{ number_format($product->harga, 0, ',', '.') }}</strong>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info">
                Belum ada produk di kategori ini.
            </div>
        </div>
        @endforelse
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>