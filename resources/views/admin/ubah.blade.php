@extends('layouts.app')
@section('title', 'Ubah Produk')
@section('content')
<div class="col-md-6 mx-auto">
    <h2 class="mb-4">Ubah Data Produk</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Kode Produk</label>
            <input type="text" name="kode_produk" class="form-control" value="{{ old('kode_produk', $produk->kode_produk) }}" required>
        </div>
        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" value="{{ old('nama_produk', $produk->nama_produk) }}" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="{{ old('kategori', $produk->kategori) }}" required>
        </div>
        <div class="mb-3">
            <label>Harga (Angka)</label>
            <input type="text" name="harga" class="form-control" value="{{ old('harga', $produk->harga) }}" required>
        </div>
        <div class="mb-3">
            <label>Stok (Angka)</label>
            <input type="text" name="stok" class="form-control" value="{{ old('stok', $produk->stok) }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi Singkat</label>
            <textarea name="deskripsi" class="form-control" rows="3" required>{{ old('deskripsi', $produk->deskripsi) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('admin.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
