<?php

use App\Http\Controllers\ortucontroller;
use App\Http\Controllers\siswacontroller;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard.dash');
});

//route siswa
Route::get('/siswa', [siswacontroller::class, "index"])->name('siswa');
Route::get('/siswa/edit_data_siswa/{NIS}', [siswacontroller::class, "edit"])->name('ubah_siswa');
Route::post('/siswa/tambah', [siswacontroller::class, "store"])->name('simpan_siswa');
Route::get('/siswa/tambah', [siswacontroller::class, "create"])->name('tambah_siswa');
Route::get('/siswa/edit/{NISN}', [siswacontroller::class, "edit"])->name('edit_siswa');
Route::put('/siswa/edit/{NISN}', [siswacontroller::class, "update"])->name('update_siswa');
Route::delete('/siswa/delete/{id}', [siswacontroller::class, "destroy"])->name('hapus');
// Route::get('/siswa/profile/{NISN}', [siswacontroller::class, "showProfile"])->name('Profile');

// route ortu
Route::get('/OrangTua_Siswa', [ortucontroller::class, "index"])->name('Ortu');
Route::get('/OrangTua_Siswa/edit_data_Orang_Tua/{id}', [ortucontroller::class, "edit"])->name('ubah_siswa');
Route::post('/OrangTua_Siswa/Tambah', [ortucontroller::class, "store"])->name('simpan_ortu');
Route::get('/OrangTua_Siswa/Tambah', [ortucontroller::class, "create"])->name('tambah_ortu');
Route::get('/OrangTua_Siswa/edit/{id}', [ortucontroller::class, "edit"])->name('edit_ortu');
Route::put('/OrangTua_Siswa/edit/{id}', [ortucontroller::class, "update"])->name('update_ortu');
Route::delete('/OrangTua_Siswa/delete/{id}', [ortucontroller::class, "destroy"])->name('hapus');
