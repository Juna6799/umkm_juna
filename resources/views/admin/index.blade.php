@extends('layouts.app')
@section('title', 'Admin - Kelola Produk')
@section('content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Manajemen Data Produk</h2>
    <a href="{{ route('admin.tambah') }}" class="btn btn-success">+ Tambah Produk Baru</a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $no => $row)
            <tr>
                <td>{{ $no + 1 }}</td>
                <td>{{ $row->kode_produk }}</td>
                <td>{{ $row->nama_produk }}</td>
                <td>{{ $row->kategori }}</td>
                <td>Rp {{ number_format($row->harga, 0, ',', '.') }}</td>
                <td>{{ $row->stok }}</td>
                <td>
                    <a href="{{ route('admin.ubah', $row->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                    <form action="{{ route('admin.destroy', $row->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
