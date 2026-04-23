<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/pegawai', [PegawaiController::class, 'index']);

// Route untuk menampilkan form tambah pegawai
Route::get('/pegawai/create', [PegawaiController::class, 'create']);

// Route untuk memproses/menyimpan data dari form
Route::post('/pegawai', [PegawaiController::class, 'store']);

// Route untuk menghapus data pegawai berdasarkan ID
Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy']);

// Route untuk menampilkan form edit pegawai
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit']);

// Route untuk memproses update data pegawai
Route::put('/pegawai/{id}', [PegawaiController::class, 'update']);