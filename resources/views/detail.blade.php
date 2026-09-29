@extends('layouts.app')
@section('title', 'Detail - ' . $produk->nama_produk)
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title">{{ $produk->nama_produk }}</h2>
                <span class="badge bg-primary mb-3">{{ $produk->kategori }}</span>
                <p><strong>Kode Produk:</strong> {{ $produk->kode_produk }}</p>
                <p><strong>Harga:</strong> <span class="text-success fw-bold">Rp {{ number_format($produk->harga, 0, ',', '.') }}</span></p>
                <p><strong>Stok Tersedia:</strong> {{ $produk->stok }} pcs</p>
                <hr>
                <p><strong>Deskripsi Lengkap:</strong></p>
                <p>{!! nl2br(e($produk->deskripsi)) !!}</p>
                <a href="{{ route('katalog') }}" class="btn btn-secondary mt-3">Kembali ke Katalog</a>
            </div>
        </div>
    </div>
</div>
@endsection
