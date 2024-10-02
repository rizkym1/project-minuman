@extends('layouts.app_modern')
@section('content')
    <div class="card mt-3">
        <div class="card-body">
            <h3>Data Minuman</h3>
            <a href="/minuman/create" class="btn btn-primary">Tambah Data</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Minuman</th>
                        <th>Foto</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($minuman as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_minuman }}</td>
                            <td><img src="{{ Storage::url($item->foto) }}" alt="Foto Minuman" width="50">
                            </td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="/minuman/{{ $item->id }}/edit" class="btn btn-warning me-2  btn-sm">Edit</a>
                                    <form action="/minuman/{{ $item->id }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Anda Yakin?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $minuman->links() !!}
        </div>
    </div>
@endsection
