<?php

namespace App\Http\Controllers;

use App\Models\StoreProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreProfileController extends Controller
{
    // Menampilkan profil toko (halaman publik)
    public function show()
    {
        $profile = StoreProfile::first();
        return view('store-profile.show', compact('profile'));
    }

    // Menampilkan form edit profil toko (admin only)
    public function edit()
    {
        $profile = StoreProfile::first();
        return view('store-profile.edit', compact('profile'));
    }

    // Menyimpan profil toko baru (Create)
    public function store(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kontak' => 'nullable|string|max:255',
            'lokasi' => 'nullable|string',
            'logo_toko' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->except('logo_toko');

        if ($request->hasFile('logo_toko')) {
            $logoPath = $request->file('logo_toko')->store('logos', 'public');
            $data['logo_toko'] = $logoPath;
        }

        StoreProfile::create($data);

        return redirect()->route('store-profile.edit')->with('success', 'Profil toko berhasil dibuat!');
    }

    // Memperbarui profil toko (Update)
    public function update(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kontak' => 'nullable|string|max:255',
            'lokasi' => 'nullable|string',
            'logo_toko' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $profile = StoreProfile::first();

        if (!$profile) {
            return $this->store($request);
        }

        $data = $request->except('logo_toko');

        if ($request->hasFile('logo_toko')) {
            // Hapus logo lama jika ada
            if ($profile->logo_toko) {
                Storage::disk('public')->delete($profile->logo_toko);
            }
            
            $logoPath = $request->file('logo_toko')->store('logos', 'public');
            $data['logo_toko'] = $logoPath;
        }

        $profile->update($data);

        return redirect()->route('store-profile.edit')->with('success', 'Profil toko berhasil diperbarui!');
    }
}