<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/anggotas', function () {
    return redirect('/anggotas');
});

// Route Resource CRUD untuk Anggota
Route::resource('anggotas', AnggotaController::class);

// Route Resource CRUD untuk Transaksi Simpan Pinjam
Route::resource('transaksis', TransaksiController::class);