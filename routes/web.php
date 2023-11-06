<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\KartuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LihatNilaiController;
use App\Http\Controllers\PagenotContrller;


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

Route::get('/dashboard',[DashboardController::class, 'index']); 

//conton pemanggilan secara satu persatu function menggunakan get, put, update, delete
Route::get('/notefound', [PagenotContrller::class,'index']);

//memanggi seluruh fungsi atau function menggunakan resourec
Route::resource('kartu', KartuController::class);

//memanggil fungsi satu persatu
Route::get('/jenis_produk', [JenisProdukController::class, 'index']);