<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['nama_produk' => 'Kain Batik Tulis Parang', 'deskripsi' => 'Motif parang klasik khas Jawa, dibuat dengan tangan', 'harga' => 350000, 'stok' => 15, 'kategori_id' => 1, 'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Batik_Parang.jpg/320px-Batik_Parang.jpg'],
            ['nama_produk' => 'Kain Batik Tulis Mega Mendung', 'deskripsi' => 'Motif awan khas Cirebon, warna biru indigo', 'harga' => 425000, 'stok' => 10, 'kategori_id' => 1, 'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Mega_mendung_batik.jpg/320px-Mega_mendung_batik.jpg'],
            ['nama_produk' => 'Kain Batik Tulis Kawung', 'deskripsi' => 'Motif kawung elegan bermakna kesempurnaan', 'harga' => 380000, 'stok' => 8, 'kategori_id' => 1, 'gambar' => 'https://picsum.photos/seed/kawung/400/300'],
            ['nama_produk' => 'Kain Batik Cap Truntum', 'deskripsi' => 'Motif truntum simbol cinta abadi', 'harga' => 175000, 'stok' => 25, 'kategori_id' => 2, 'gambar' => 'https://picsum.photos/seed/truntum/400/300'],
            ['nama_produk' => 'Kain Batik Cap Sidomukti', 'deskripsi' => 'Motif sidomukti bermakna kemakmuran', 'harga' => 195000, 'stok' => 20, 'kategori_id' => 2, 'gambar' => 'https://picsum.photos/seed/sidomukti/400/300'],
            ['nama_produk' => 'Kain Batik Cap Sekar Jagad', 'deskripsi' => 'Motif bunga dunia warna cerah', 'harga' => 185000, 'stok' => 18, 'kategori_id' => 2, 'gambar' => 'https://picsum.photos/seed/sekarjagad/400/300'],
            ['nama_produk' => 'Kain Batik Printing Modern', 'deskripsi' => 'Desain kontemporer dengan warna vibrant', 'harga' => 95000, 'stok' => 50, 'kategori_id' => 3, 'gambar' => 'https://picsum.photos/seed/printing1/400/300'],
            ['nama_produk' => 'Kain Batik Printing Floral', 'deskripsi' => 'Motif bunga tropis warna-warni', 'harga' => 85000, 'stok' => 45, 'kategori_id' => 3, 'gambar' => 'https://picsum.photos/seed/floral1/400/300'],
            ['nama_produk' => 'Kain Batik Kombinasi Lereng', 'deskripsi' => 'Perpaduan teknik tulis dan cap motif lereng', 'harga' => 275000, 'stok' => 12, 'kategori_id' => 4, 'gambar' => 'https://picsum.photos/seed/lereng1/400/300'],
            ['nama_produk' => 'Kain Batik Kombinasi Ceplok', 'deskripsi' => 'Motif ceplok dengan sentuhan modern', 'harga' => 255000, 'stok' => 14, 'kategori_id' => 4, 'gambar' => 'https://picsum.photos/seed/ceplok1/400/300'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}