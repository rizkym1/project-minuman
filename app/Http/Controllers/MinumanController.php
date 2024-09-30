<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MinumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['minuman'] = \App\Models\Minuman::latest()->paginate(10);
        return view('minuman_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('minuman_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_minuman' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]);

        // Buat objek minuman baru
        $minuman = new Minuman();
        $minuman->nama_minuman = $request->input('nama_minuman');
        $minuman->deskripsi = $request->input('deskripsi');
        $minuman->stok = $request->input('stok');
        $minuman->harga = $request->input('harga');

        // Simpan foto ke folder storage/app/public/uploads
        if ($request->hasFile('foto')) {
            // Menyimpan foto ke storage/app/public/uploads
            $path = $request->file('foto')->store('uploads', 'public'); // 'public' adalah disk default untuk storage
            $minuman->foto = $path; // Simpan path ke database
        }

        // Berikan pesan flash dan simpan data ke database
        flash('Data Berhasil Disimpan')->success();
        $minuman->save();

        return back(); // Kembali ke halaman sebelumnya
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['minuman'] = \App\Models\Minuman::findOrFail($id);
        return view('minuman_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        $request->validate([
            'nama_minuman' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000', // nullable berarti tidak wajib upload foto baru
        ]);

        // Cari data minuman berdasarkan id
        $minuman = Minuman::findOrFail($id);

        // Jika ada file foto baru yang diunggah
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if (!empty($minuman->foto) && Storage::disk('public')->exists($minuman->foto)) {
                Storage::disk('public')->delete($minuman->foto);
            }

            // Simpan foto baru di storage/app/public/uploads
            $path = $request->file('foto')->store('uploads', 'public');
            $minuman->foto = $path; // Simpan path foto baru ke database
        }

        // Update data minuman
        $minuman->nama_minuman = $request->input('nama_minuman');
        $minuman->deskripsi = $request->input('deskripsi');
        $minuman->stok = $request->input('stok');
        $minuman->harga = $request->input('harga');

        // Simpan perubahan ke database
        $minuman->save();

        // Berikan pesan flash
        flash('Data berhasil diperbarui')->success();

        // Kembalikan ke halaman sebelumnya
        return redirect()->route('minuman.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $minuman = Minuman::findOrfail($id);
        // Periksa apakah foto ada dan file-nya juga ada di folder storage
        if ($minuman->foto != null && Storage::disk('public')->exists($minuman->foto)) {
            // Hapus file foto dari folder storage/app/public/uploads
            Storage::disk('public')->delete($minuman->foto);
        }
        $minuman->delete();
        flash('Data berhasil dihapus');
        return redirect()->route('minuman.index');
    }
}
