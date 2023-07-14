<?php


use App\Http\Controllers\kelascontroller;
use App\Http\Controllers\ortucontroller;
use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ClassKelasController;
use App\Http\Controllers\CobasisController;
use App\Http\Controllers\CobaabsController;
use App\Http\Controllers\CobadetabsController;
use App\Http\Controllers\CobakelasController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MatapelajaranController;

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


// excel
Route::post('import-excel', [ExcelController::class, 'import'])->name('import.excel');
Route::post('export-excel', [ExcelController::class, 'exportSiswa'])->name('siswa.export');
// endexcel
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


//mapel

Route::get('/mapel', [MatapelajaranController::class, 'mapel'])->name('mapel');
Route::post('/createmapel', [MatapelajaranController::class, 'createmapel'])->name('createmapel');
Route::post('/editmapel/{id}', [MatapelajaranController::class, 'update']);
Route::get('/hapusmapel/{id}', [MatapelajaranController::class, 'destroy'])->name('hapus-mapel');
//endmapel


//jadwal


Route::get('/jadwal', [JadwalController::class, 'jadwal'])->name('jadwal');
Route::post('/createjadwal', [JadwalController::class, 'createjadwal'])->name('createjadwal');

//endjadwal



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


// route kenaikan
Route::post('/kenaikan', [CobasisController::class, 'kenaikan'])->name('kenaikan');
Route::get('/alumni', [CobasisController::class, 'alumni'])->name('alumni');
// end-route-kenaikan
// validasi
// Route::get('/validasi', function () {
//     return view('pelanggaran.tampil');
// });
Route::get('tampil', [CobasisController::class, 'tampil'])->name('tampil');
Route::get('/process', [CobasisController::class, 'process']);
 
//route jurusan
Route::get('/jurusan', [jurusancontroller::class, "index"])->name('jurusan');

//route kelas
Route::get('/kelas', [kelascontroller::class, "index"])->name('kelas');

//route guru
Route::get('/guru', [gurucontroller::class, "index"])->name('guru');

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
