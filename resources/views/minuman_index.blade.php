@extends('mylayout')
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
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ $item->stok }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $minuman->links() !!}
        </div>
    </div>
@endsection
