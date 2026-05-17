<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreProfile extends Model
{
    use HasFactory;

    protected $table = 'store_profiles';
    protected $primaryKey = 'id_profil';

    protected $fillable = [
        'nama_toko',
        'deskripsi',
        'kontak',
        'lokasi',
        'logo_toko',
    ];
}