
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeuanganController;

// HALAMAN BERANDA
Route::get('/', [KeuanganController::class, 'index']);

// HALAMAN DAFTAR TRANSAKSI
Route::get('/transaksi', [KeuanganController::class, 'transaksi']);

// HALAMAN DETAIL TRANSAKSI
Route::get('/transaksi/{id}', [KeuanganController::class, 'detail']);

// HALAMAN KATEGORI
Route::get('/kategori/{kategori}', [KeuanganController::class, 'kategori']);

// HALAMAN PERIODE
Route::get('/periode/{bulan}', [KeuanganController::class, 'periode']);

// HALAMAN LAPORAN LABA RUGI
Route::get('/laporan', [KeuanganController::class, 'laporan']);

// HALAMAN ANALISIS KEUANGAN
Route::get('/analisis', [KeuanganController::class, 'analisis']);
