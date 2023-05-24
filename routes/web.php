<?php

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
Route::get('/siswa/edit_data_siswa/{NIS}', [siswacontroller::class, "edit"])->name('edit_siswa');
Route::post('/siswa/tambah', [siswacontroller::class, "store"])->name('simpan_siswa');
Route::get('/siswa/tambah', [siswacontroller::class, "create"])->name('tambah_siswa');
Route::get('/siswa/edit/{NISN}', [barangcontroller::class, "edit"])->name('edit_siswa');
Route::put('/siswa/edit/{NISN}', [barangcontroller::class, "update"])->name('update_siswa');
Route::delete('/siswa/delete/{id}', [siswacontroller::class, "destroy"])->name('hapus');
// Route::get('/siswa/profile/{NISN}', [siswacontroller::class, "showProfile"])->name('Profile');

// Route::get('page2', function () {
//     return view('page2git');
// });
