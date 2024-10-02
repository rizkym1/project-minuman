@extends('layouts.app_modern', ['title' => 'Tambah data minuman'])
@section('content')
    <div class="card mt-3">
        <div class="card-body">
            <h3>Edit Data <b>{{ $minuman->nama_minuman }}</b></h3>
            <form action="/minuman/{{ $minuman->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group mb-3">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto"
                        name="foto">
                    <span class="text-danger">{{ $errors->first('foto') }}</span>
                    <img src="{{ Storage::url($minuman->foto) }}" width="100" class="img-thumbnail mt-2">
                </div>
                <div class="form-group mb-3">
                    <label for="nama_minuman">Nama Minuman</label>
                    <input type="text" class="form-control @error('nama_minuman') is-invalid @enderror" id="nama_minuman"
                        name="nama_minuman" value="{{ old('nama_minuman') ?? $minuman->nama_minuman }}">
                    <span class="text-danger">{{ $errors->first('nama_minuman') }}</span>
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                        name="deskripsi" value="{{ old('deskripsi') ?? $minuman->deskripsi }}">
                    <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi">Harga</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga"
                        name="harga" value="{{ old('harga') ?? $minuman->harga }}">
                    <span class="text-danger">{{ $errors->first('harga') }}</span>
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi">Stok</label>
                    <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok"
                        name="stok" value="{{ old('stok') ?? $minuman->stok }}">
                    <span class="text-danger">{{ $errors->first('stok') }}</span>
                </div>
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </form>
        </div>
    </div>
@endsection
