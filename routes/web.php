<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdukController::class, 'home'])->name('home');
Route::get('/katalog', [ProdukController::class, 'katalog'])->name('katalog');
Route::get('/detail/{id}', [ProdukController::class, 'detail'])->name('detail');

// Route Admin (CRUD)
Route::prefix('admin')->group(function () {
    Route::get('/', [ProdukController::class, 'adminIndex'])->name('admin.index');
    Route::get('/tambah', [ProdukController::class, 'create'])->name('admin.tambah');
    Route::post('/tambah', [ProdukController::class, 'store'])->name('admin.store');
    Route::get('/ubah/{id}', [ProdukController::class, 'edit'])->name('admin.ubah');
    Route::put('/ubah/{id}', [ProdukController::class, 'update'])->name('admin.update');
    Route::delete('/hapus/{id}', [ProdukController::class, 'destroy'])->name('admin.destroy');
});
