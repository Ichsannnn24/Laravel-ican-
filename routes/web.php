<?php

use App\Http\Controllers\absensiController;
use App\Http\Controllers\presensiController;
use App\Models\presensi;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/layout/index');
});

Route::resource('absensi', absensiController::class);

Route::resource('presensi', presensiController::class);

Route::get('/about', function () {
    return view('/component/about');
});

// belajar_laravel\resources\views\component\about . blade . php
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('uts', function () {
    return view('uts');
});
Route::get('produk', function () {
    return view('produk');
});

route::get('/form', function () {
    $namap = ['Pilih Produk', 'Alat Tulis', 'elektronik', 'Sembako'];
    $jumlah = count($namap);

    return view('/form', compact('namap', 'jumlah'));
});

Route::get('/produk', function(){
    $kode_produk = ['BRG001' ,'BRG002',];
    $nama_produk = ['Pena', 'Buku'];
    $jenis_produk = ['Alat tulis','Alat tulis'];
    $harga = ['20000','15000'];
    $jumlah = count($kode_produk);
    return view('produk', compact('kode_produk', 'nama_produk','jenis_produk','harga','jumlah'));
});