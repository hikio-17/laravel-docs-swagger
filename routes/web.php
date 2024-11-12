<?php

use App\Http\Controllers\KategoriBeritaController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    // Rute API untuk kategori berita
    Route::get('kategori-berita', [KategoriBeritaController::class, 'listKategoriBerita']);
});