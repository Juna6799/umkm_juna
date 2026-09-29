<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produks')->insert([
            ['kode_produk' => 'P001', 'nama_produk' => 'Kaos SMK Kreatif', 'kategori' => 'Fashion', 'harga' => 75000, 'stok' => 20, 'deskripsi' => 'Kaos desain siswa SMK', 'created_at' => now(), 'updated_at' => now()],
            ['kode_produk' => 'P002', 'nama_produk' => 'Totebag Edukasi', 'kategori' => 'Aksesori', 'harga' => 45000, 'stok' => 15, 'deskripsi' => 'Totebag untuk kegiatan sekolah', 'created_at' => now(), 'updated_at' => now()],
            ['kode_produk' => 'P003', 'nama_produk' => 'Notebook Pelajar', 'kategori' => 'Alat Tulis', 'harga' => 25000, 'stok' => 30, 'deskripsi' => 'Notebook untuk catatan belajar', 'created_at' => now(), 'updated_at' => now()],
            ['kode_produk' => 'P004', 'nama_produk' => 'Tumbler Sekolah', 'kategori' => 'Aksesori', 'harga' => 65000, 'stok' => 18, 'deskripsi' => 'Botol minum reusable', 'created_at' => now(), 'updated_at' => now()],
            ['kode_produk' => 'P005', 'nama_produk' => 'Stiker Kreatif', 'kategori' => 'Aksesori', 'harga' => 15000, 'stok' => 50, 'deskripsi' => 'Paket stiker bertema edukasi', 'created_at' => now(), 'updated_at' => now()],
            ['kode_produk' => 'P006', 'nama_produk' => 'Pin Ekskul', 'kategori' => 'Aksesori', 'harga' => 10000, 'stok' => 40, 'deskripsi' => 'Pin kegiatan ekstrakurikuler', 'created_at' => now(), 'updated_at' => now()],
            ['kode_produk' => 'P007', 'nama_produk' => 'Topi Sekolah', 'kategori' => 'Fashion', 'harga' => 55000, 'stok' => 12, 'deskripsi' => 'Topi model kasual', 'created_at' => now(), 'updated_at' => now()],
            ['kode_produk' => 'P008', 'nama_produk' => 'Mug Kelas', 'kategori' => 'Perlengkapan', 'harga' => 35000, 'stok' => 25, 'deskripsi' => 'Mug souvenir kelas', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
