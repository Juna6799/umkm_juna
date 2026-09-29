<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function katalog(Request $request)
    {
        $cari = $request->input('cari');
        $produks = Produk::when($cari, function ($query, $cari) {
            return $query->where('nama_produk', 'like', "%{$cari}%")
                ->orWhere('kategori', 'like', "%{$cari}%");
        })->get();

        return view('katalog', compact('produks', 'cari'));
    }

    public function detail($id)
    {
        $produk = Produk::findOrFail($id);
        return view('detail', compact('produk'));
    }

    public function adminIndex()
    {
        $produks = Produk::all();
        return view('admin.index', compact('produks'));
    }

    public function create()
    {
        return view('admin.tambah');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'kode_produk' => 'required',
                'nama_produk' => 'required',
                'kategori'    => 'required',
                'harga'       => 'required|numeric',
                'stok'        => 'required|numeric',
                'deskripsi'   => 'required'
            ],
            [
                'harga.numeric' => 'Harga wajib berupa angka!',
                'stok.numeric'  => 'Stok wajib berupa angka!',
                'required'      => 'Field :attribute wajib diisi.'
            ]
        );
        Produk::create($request->all());
        return redirect()->route('admin.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.ubah', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'kode_produk' => 'required',
                'nama_produk' => 'required',
                'kategori'    => 'required',
                'harga'       => 'required|numeric',
                'stok'        => 'required|numeric',
                'deskripsi'   => 'required'
            ],
            [
                'harga.numeric' => 'Harga wajib berupa angka!',
                'stok.numeric'  => 'Stok wajib berupa angka!',
            ]
        );

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());
        return redirect()->route('admin.index')->with('success', 'Produk berhasil diperbaharui');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('admin.index')->with('success', 'Produk berhasil dihapus');
    }
}
