<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

Route::get('/', function () {
    return view('dashboard');
});

//login
Route::get('/Auth/login', [BarangController::class, 'login'])->name('login');

//navbar
Route::get('/dashboard', [BarangController::class, 'dashboard'])->name('dashboard');
Route::get('/barang-masuk', [BarangController::class, 'barangmsk'])->name('barangmsk');
Route::get('/barang-bangunan', [BarangController::class, 'stokbarang'])->name('stokbarang');
Route::get('/supplier', [BarangController::class, 'supplier'])->name('supplier');
Route::get('/tansaksi-penjualan', [BarangController::class, 'transaksijual'])->name('transaksijual');
Route::get('/kelola-user', [BarangController::class, 'kelolauser'])->name('kelolauser');
Route::get('/cetak-laporan', [BarangController::class, 'cetak'])->name('cetak');

//stok
Route::get('/tambah-stok', [BarangController::class, 'create'])->name('createstok');
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::post('/simpan-stok', [BarangController::class, 'store'])->name('store');
Route::get('/hapus', [BarangController::class, 'destroy'])->name('barang.destroy');

Route::get('/tambah-supplier', [BarangController::class, 'create'])->name('createsupplier');

Route::get('/blank', [BarangController::class, 'blank'])->name('blank');
// Route::get('/praktikum', [AppController::class, 'praktikum'])->name('praktikum');
// Route::get('/navb', [AppController::class, 'navb'])->name('navb');
// Route::get('/footer', [AppController::class, 'footer'])->name('footer');
// Route::get('/informasi', [AppController::class, 'informasi'])->name('informasi');
// Route::get('/profil', [AppController::class, 'profil'])->name('profil');
// Route::get('/peminjaman', [AppController::class, 'peminjaman'])->name('peminjaman');

// Route::get('/admin/login', [AdminController::class, 'login'])->name('login');
// Route::post('/admin/login', [AdminController::class, 'loginPost'])->name('login');
// Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
// Route::get('/admin/peminjaman', [AdminController::class, 'peminjamanAdmin'])->name('peminjamanAdmin');