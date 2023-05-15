<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ClassKelasController;

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
 Route::get('/hapusJurusan/{id}', [JurusanController::class, 'destroy'])->name('destroy');
//  Route::post('/hapusJurusan/{id}', [JurusanController::class, 'destroy'])->name('hapus.jurusan');
// Route::delete('/hapusjurusan/{id}', 'JurusanController@destroy')->name('hapus.jurusan');

Route::post('/editkelas/{id}', [ClasskelasController::class, 'update']);
 Route::get('/hapuskelas/{id}', [ClassKelasController::class, 'destroy'])->name('destroy');

 Route::post('/editguru/{id}', [GuruController::class, 'update']);
 Route::get('/hapusguru/{id}', [GuruController::class, 'destroy'])->name('destroy');


