@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Promo</h2>

    <a href="/promos/create" class="btn btn-batik mb-3">
        Tambah Promo
    </a>

    @foreach($promos as $promo)
        <div class="card mb-3">
            <div class="card-body">
                <h4>{{ $promo->judul }}</h4>

                <p>{{ $promo->isi }}</p>

                @if($promo->gambar)
                    <img src="{{ asset('storage/' . $promo->gambar) }}" width="300">
                @endif

                <p>
                    {{ $promo->tanggal_mulai }}
                    -
                    {{ $promo->tanggal_selesai }}
                </p>
            </div>
        </div>
    @endforeach
</div>
@endsection