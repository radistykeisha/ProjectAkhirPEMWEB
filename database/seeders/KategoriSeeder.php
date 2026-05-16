<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $kategoris = [
            ['nama_kategori' => 'Batik Tulis', 'deskripsi' => 'Batik yang dibuat dengan tangan menggunakan canting'],
            ['nama_kategori' => 'Batik Cap', 'deskripsi' => 'Batik yang dibuat menggunakan cap tembaga'],
            ['nama_kategori' => 'Batik Printing', 'deskripsi' => 'Batik yang dibuat dengan teknik cetak modern'],
            ['nama_kategori' => 'Batik Kombinasi', 'deskripsi' => 'Perpaduan antara batik tulis dan batik cap'],
        ];

        foreach ($kategoris as $kategori) {
            Kategori::create($kategori);
        }
    }
}