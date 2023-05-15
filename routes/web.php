<?php

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

Route::get('/Siswa', function () {
    return view('siswa.index');
});

<<<<<<< HEAD
Route::get('page2', function () {
    return view('page2');
});
=======
// Route::get('page2', function () {
//     return view('page2git');
// });
>>>>>>> 261cb84fadd5283a0495d8d293561855294de1b0
