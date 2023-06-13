<?php

use App\Http\Controllers\CobacobaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportController;
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

// Route::get('/siswa', function () {
//     return view('siswa.index');
// });
Route::get('/', function () {
    return view('dashboard.dash');
});
Route::get('/absen', function () {
    return view('absen.index');
});
Route::get('/guru', function () {
    return view('guru.index');
});



// Route::post('/import', [ImportController::class, 'import'])->name('import');


//siswa
Route::get('/siswa', function () {return view('cobacoba.index');});
Route::post('/tambah/siswa', [CobacobaController::class, "create"])->name('coba');

Route::post('/siswa', function () {return view('cobacoba.index');});
// Route::post('/tambah/siswa', [CobacobaController::class, "import"])->name('coba');

//import
Route::post('users-import', [CobacobaController::class, 'import'])->name('user.import');
//export
// Route::post('index-export', [CobacobaController::class, "export"])->name('index_import');







// Route::get('/siswa', function () {
//     return view('siswa.index');
// });
// Route::get('page2', function () {
//     return view('page2git');
// });
