<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\KartuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LihatNilaiController;
use App\Http\Controllers\PagenotContrller;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Models\Jenis_produk;

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
    return view('welcome');
});

Route::get('/salam', function(){
    return "Assalamualaikum Selamat Belajar Laravel";
});

//tambah routing dengan parameter
Route::get('/staff/{nama}/{divisi}', function($nama, $divisi){
    return 'Nama Pegawai : '.$nama. '<br> Departemen : '.$divisi;
});

//roting dengan memanggil nama file dari view
Route::get('/kondisi', function(){
    return view('kondisi');
});
Route::get('/nilai', function(){
    return view('coba.nilai');
});
// routing dengan view dan array data
Route::get('/daftarnilai', function(){
    return view('coba.daftar');
});

//routing manggil dari class controller
Route::get('/datamahasiswa',[LihatNilaiController::class, 'dataMahasiswa']);

//prefix
Route::prefix('admin')->group(function(){
Route::get('/dashboard',[DashboardController::class, 'index']); 

//conton pemanggilan secara satu persatu function menggunakan get, put, update, delete
Route::get('/notefound', [PagenotContrller::class,'index']);

//memanggi seluruh fungsi atau function menggunakan resourec
Route::resource('kartu', KartuController::class);

//memanggil fungsi satu persatu
Route::get('/jenis_produk', [JenisProdukController::class, 'index']);
Route::get('/jenis_produk/create',[JenisProdukController::class, 'create']);
Route::post('/jenis_produk/store',[JenisProdukController::class, 'store']);
Route::get('/jenis_produk/edit/{id}', [JenisProdukController::class, 'edit']);
Route::post('/jenis_produk/update/{id}', [JenisProdukController::class, 'update']);

Route::get('/produk',[ProdukController::class,'index']);
Route::get('/produk/create',[ProdukController::class,'create']);
Route::post('/produk/store',[ProdukController::class,'store']);
Route::get('/produk/show/{id}',[ProdukController::class,'show']);
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
Route::post('/produk/update/{id}', [ProdukController::class], 'update');
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

Route::resource('pelanggan', PelangganController::class);
});
