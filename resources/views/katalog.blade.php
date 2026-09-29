@extends('layouts.app')
@section('title', 'Katalog Produk - UMKM Siswa SMK')
@section('content')
<h2 class="mb-4 text-center">Katalog Produk UMKM</h2>

<form action="{{ route('katalog') }}" method="GET" class="row g-3 mb-4 justify-content-center">
    <div class="col-md-6">
        <input type="text" name="cari" class="form-control" placeholder="Cari berdasarkan nama atau kategori..." value="{{ $cari ?? '' }}">
    </div>
    <div class="col-md-2">
        <button type="submit" class="btn btn-outline-primary w-100">Cari</button>
    </div>
</form>

<div class="row">
    @forelse ($produks as $row)
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <span class="badge bg-secondary mb-2">{{ $row->kategori }}</span>
                    <h5 class="card-title">{{ $row->nama_produk }}</h5>
                    <p class="card-text text-success fw-bold">Rp {{ number_format($row->harga, 0, ',', '.') }}</p>
                    <p class="card-text small text-muted">{{ Str::limit($row->deskripsi, 50) }}</p>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <a href="{{ route('detail', $row->id) }}" class="btn btn-sm btn-primary w-100">Detail Produk</a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center">
            <p class="alert alert-warning">Produk tidak ditemukan.</p>
        </div>
    @endforelse
</div>
@endsection
