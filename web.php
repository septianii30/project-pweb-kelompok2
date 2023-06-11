<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anggotaController;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\pinjamController;

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
    return view('index');
});

//Route untuk Data Buku
Route::get('/buku', [BukuController::class,'bukutampil']);
Route::post('/buku/tambah',[BukuController::class,'bukutambah']);
Route::get('/buku/hapus/{id_buku}',[BukuController::class,'bukuhapus']);
Route::put('/buku/edit/{id_buku}', [BukuController::class,'bukuedit']);

//Route untuk Data Buku
Route::get('/home', function(){return view('view_home');});

//Route untuk Data Anggota
Route::get('/anggota', [AnggotaController::class,'anggotatampil']);
Route::post('/anggota/tambah', [AnggotaController::class,'anggotatambah']);
Route::get('/anggota/hapus/{id_anggota}', [AnggotaController::class,'anggotahapus']);
Route::put('/anggota/edit/{id_anggota}', [AnggotaController::class,'anggotaedit']);

//Route untuk Data Petugas
Route::get('/petugas', [PetugasController::class,'petugastampil']);
Route::post('/petugas/tambah', [PetugasController::class,'petugastambah']);
Route::get('/petugas/hapus/{id_petugas}', [PetugasController::class,'petugashapus']);
Route::put('/petugas/edit/{id_petugas}', [PetugasController::class,'petugasedit']);

//Route untuk Data Peminjaman
Route::get('/pinjam', [PinjamController::class,'pinjamtampil']);
Route::post('/pinjam/tambah',[PinjamController::class,'pinjamtambah']);
Route::get('/pinjam/hapus/{id_pinjam}',[PinjamController::class,'pinjamhapus']);
Route::put('/pinjam/edit/{id_pinjam}', [PinjamController::class,'pinjamedit']);
