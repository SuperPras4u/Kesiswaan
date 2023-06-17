<?php

use App\Http\Controllers\gurucontroller;
use App\Http\Controllers\jurusancontroller;
use App\Http\Controllers\kelascontroller;
use App\Http\Controllers\ortucontroller;
use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\usercontroller;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard.dash');
    });
    Route::post('authentiaction/logout', [usercontroller::class, "logout"])->name('signout');

});
//route jurusan
Route::get('/jurusan', [jurusancontroller::class, "index"])->name('jurusan');

//route kelas
Route::get('/kelas', [kelascontroller::class, "index"])->name('kelas');

//route guru
Route::get('/guru', [gurucontroller::class, "index"])->name('guru');
Route::get('/guru/tambah', [gurucontroller::class, "create"])->name('tambah_guru');
Route::post('/guru/tambah', [gurucontroller::class, "store"])->name('simpan_guru');
Route::delete('/guru/delete/{Nama_Lengkap}', [gurucontroller::class, "destroy"])->name('guru_del');

//route siswa
Route::get('/siswa', [siswacontroller::class, "index"])->name('siswa');
Route::get('/siswa/edit_data_siswa/{NISN}', [siswacontroller::class, "edit"])->name('ubah_siswa');
Route::post('/siswa/tambah', [siswacontroller::class, "store"])->name('simpan_siswa');
Route::get('/siswa/tambah', [siswacontroller::class, "create"])->name('tambah_siswa');
Route::get('/siswa/edit/{NISN}', [siswacontroller::class, "edit"])->name('edit_siswa');
Route::put('/siswa/edit/{NISN}', [siswacontroller::class, "update"])->name('update_siswa');
Route::delete('/siswa/delete/{id}', [siswacontroller::class, "destroy"])->name('hapus');
Route::get('/siswa/profile/{NISN}', [usercontroller::class, "profile"])->name('profile');

// Route::post('/siswa/upload_foto', [siswacontroller::class, "upload"])->name('up_foto');

// route ortu
Route::get('/OrangTua_Siswa', [ortucontroller::class, "index"])->name('Ortu');
Route::get('/OrangTua_Siswa/edit_data_Orang_Tua/{id}', [ortucontroller::class, "edit"])->name('ubah_ortu');
Route::post('/OrangTua_Siswa/Tambah', [ortucontroller::class, "store"])->name('simpan_ortu');
Route::get('/OrangTua_Siswa/Tambah', [ortucontroller::class, "create"])->name('tambah_ortu');
Route::get('/OrangTua_Siswa/edit/{id}', [ortucontroller::class, "edit"])->name('edit_ortu');
Route::put('/OrangTua_Siswa/edit/{id}', [ortucontroller::class, "update"])->name('update_ortu');
Route::delete('/OrangTua_Siswa/delete/{id}', [ortucontroller::class, "destroy"])->name('hapus_ortu');

// route login
Route::middleware(['guest'])->group(function () {

    Route::redirect('/Login', '/Authentication/Login')->name('sign');
    Route::redirect('/Register', '/Authentication/Register');
    Route::get('/Authentication/Login', [usercontroller::class, "login"])->name('login');
    Route::post('/Authentication/Login', [usercontroller::class, "login_user"])->name('Login_User');
    Route::get('Authentication/Register', [usercontroller::class, "register"])->name('Register');
    Route::post('Authentication/Register', [usercontroller::class, "user_register"])->name('Register_User');

});
