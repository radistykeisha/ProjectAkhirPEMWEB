<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Tampilkan semua produk
    public function index()
    {
        $kategoris = Kategori::all();
        $products = Product::with('kategori')->get();
        return view('katalog.index', compact('products', 'kategoris'));
    }

    // Tampilkan produk berdasarkan kategori
    public function byKategori($id)
    {
        $kategoris = Kategori::all();
        $kategori = Kategori::findOrFail($id);
        $products = Product::where('kategori_id', $id)->with('kategori')->get();
        return view('katalog.index', compact('products', 'kategoris', 'kategori'));
    }
}