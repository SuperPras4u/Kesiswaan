<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ClassKelasController;
use App\Http\Controllers\CobasisController;
use App\Http\Controllers\CobaabsController;
use App\Http\Controllers\CobadetabsController;
use App\Http\Controllers\CobakelasController;
use App\Http\Controllers\PelanggaranController;

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

Route::get('/Siswa', function () {
    return view('siswa.index');
});

route::get('/', function() {
    return view('dashboard.dash');
});

Route::get('page2', function () {
    return view('page2git');
});

Route::get('/MenuGuru', [GuruController::class, 'Guru'])->name('Guru');
Route::post('/tambahguru', [GuruController::class, 'tambahguru'])->name('tambahguru');

Route::get('/MenuJurusan', [JurusanController::class, 'jurusan'])->name('jurusan');
Route::post('/tambahjurusan', [JurusanController::class, 'tambahjurusan'])->name('tambahjurusan');

Route::get('/Menukelas', [ClassKelasController::class, 'kelas'])->name('kelas');
Route::post('/tambahkelas', [ClassKelasController::class, 'tambahkelas'])->name('tambahkelas');



Route::post('/editJurusan/{id}', [JurusanController::class, 'update']);
 Route::get('/hapusJurusan/{id}', [JurusanController::class, 'destroy'])->name('destroy_jurusan');
//  Route::post('/hapusJurusan/{id}', [JurusanController::class, 'destroy'])->name('hapus.jurusan');
// Route::delete('/hapusjurusan/{id}', 'JurusanController@destroy')->name('hapus.jurusan');

Route::post('/editkelas/{id}', [ClasskelasController::class, 'update']);
 Route::get('/hapuskelas/{id}', [ClassKelasController::class, 'destroy'])->name('destroy_kelas');

 Route::post('/editguru/{id}', [GuruController::class, 'update']);
 Route::get('/hapusguru/{id}', [GuruController::class, 'destroy'])->name('destroy_guru');

 Route::get('/cobases', [CobasisController::class, 'cobases'])->name('cobases');
 Route::post('/tambahcobases', [CobasisController::class, 'tambahcobases'])->name('tambahcobases');

 Route::get('/cobaabs', [CobaabsController::class, 'cobaabs'])->name('cobaabs');
 Route::post('/tambahcobaabs', [CobaabsController::class, 'tambahcobaabs'])->name('tambahcobaabs');

 Route::get('/absensi', [CobadetabsController::class, 'absensi'])->name('absensi');
 Route::post('/tambahabsen', [CobadetabsController::class, 'atambahabsen'])->name('atambahabsen');

 Route::get('/uabsensi', [CobadetabsController::class, 'uabsensi'])->name('uabsensi');
 Route::post('/ubahabsen', [CobadetabsController::class, 'aubahabsen'])->name('aubahabsen');

 Route::get('/cobakelas', [CobakelasController::class, 'cobakelas'])->name('cobakelas');
 Route::post('/tambahcobakelas', [CobakelasController::class, 'tambahcobakelas'])->name('tambahcobakelas');

 Route::get('/siswa-{nama_siswa}', [CobakelasController::class, 'detailsiswa'])->name('detailsiswa');

 Route::get('/siswa/absensi/{id}', [CobakelasController::class, 'siswaabsensi'])->name('siswaabsensi');
 Route::post('/siswa/absensi/tambahabsen', [CobadetabsController::class, 'tambahabsen'])->name('tambahabsen');

//  ubah absen
 Route::get('/siswa/cekabsensi/{id}', [CobakelasController::class, 'siswacekabsensi'])->name('siswacekabsensi');
 Route::get('/siswa/filterabsensi/{id}', [CobakelasController::class, 'siswafilterabsensi'])->name('siswafilterabsensi');
 Route::post('/siswa/ubahabsen', [CobadetabsController::class, 'ubahabsen'])->name('ubahabsen');
//  end ubah absen
 Route::get('/absensi/filter', [CobakelasController::class, 'filter'])->name('absensi.filter');

 Route::get('/kelas/siswa/{id}/search', [CobakelasController::class, 'searchSiswa'])->name('siswacekabsensi.search');
Route::get('/siswa/cekabsensi/{id}/filter', [CobakelasController::class, 'filterSiswa'])->name('siswacekabsensi.filter');

// filter-tanggal
Route::get('/filter-by-date', [CobakelasController::class, 'filterByDate'])->name('filterbydate');
// create pelanggaran
// Route::get('/pelanggaran', function () {
//     return view('pelanggaran.pelanggaransiswa');
// });
Route::get('pelanggaran', [PelanggaranController::class, 'pelanggaran'])->name('pelanggaran');
Route::post('tambahpelanggaran', [PelanggaranController::class, 'tambahpelanggaran'])->name('tambahpelanggaran');
Route::post('detailpelanggaran', [PelanggaranController::class, 'detailpelanggaran'])->name('detailpelanggaran');
Route::get('search', [CobasisController::class, 'search'])->name('search');

// validasi
// Route::get('/validasi', function () {
//     return view('pelanggaran.tampil');
// });
Route::get('tampil', [CobasisController::class, 'tampil'])->name('tampil');
Route::get('/process', [CobasisController::class, 'process']);
 
