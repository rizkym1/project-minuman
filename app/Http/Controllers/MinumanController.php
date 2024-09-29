<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
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
        $minuman = new Minuman();
        $minuman->nama_minuman = $request->input('nama_minuman');
        $minuman->deskripsi = $request->input('deskripsi');
        $minuman->stok = $request->input('stok');
        $minuman->harga = $request->input('harga');

        // Lihat data sebelum menyimpan
        // dd($minuman);
        flash('Data Berhasil Disimpan')->success();
        $minuman->save();
        return back(); //mengarahkan user ke url sebelumnya yaitu /minuman/create dengan membawa variabel pesan
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
