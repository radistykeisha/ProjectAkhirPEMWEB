@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Promo</h2>

    <form action="/promos" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Judul Promo</label>
            <input type="text" name="judul" class="form-control">
        </div>

        <div class="mb-3">
            <label>Isi Promo</label>
            <textarea name="isi" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Gambar Banner</label>
            <input type="file" name="gambar" class="form-control">
        </div>

        <div class="mb-3">
            <label>Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" class="form-control">
        </div>

        <div class="mb-3">
            <label>Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" class="form-control">
        </div>

        <button type="submit" class="btn btn-batik">
            Simpan Promo
        </button>
    </form>
</div>
@endsection