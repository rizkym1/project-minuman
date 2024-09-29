@extends('mylayout', ['title' => 'Tambah data minuman'])
@section('content')
    <div class="card mt-3">
        <div class="card-body">
            <h3>FORM MINUMAN</h3>
            <form action="/minuman" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="nama_minuman">Nama Minuman</label>
                    <input type="text" class="form-control @error('nama_minuman') is-invalid @enderror" id="nama_minuman"
                        name="nama_minuman" value="{{ old('nama_minuman') }}">
                    <span class="text-danger">{{ $errors->first('nama_minuman') }}</span>
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                        name="deskripsi" value="{{ old('deskripsi') }}">
                    <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi">Harga</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga"
                        name="harga" value="{{ old('harga') }}">
                    <span class="text-danger">{{ $errors->first('harga') }}</span>
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi">Stok</label>
                    <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok"
                        name="stok" value="{{ old('stok') }}">
                    <span class="text-danger">{{ $errors->first('stok') }}</span>
                </div>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>
    </div>
@endsection
