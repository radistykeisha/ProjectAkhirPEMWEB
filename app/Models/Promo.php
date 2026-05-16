<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'tanggal_mulai',
        'tanggal_selesai'
    ];
}