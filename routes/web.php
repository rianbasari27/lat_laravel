<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

// 127.0.0.1:8000/ => menampilkan halaman "welcome"
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/siswa', function () {
//     return "<h1>Saya siswa</h1>";
// });

// Route::get('/siswa/{id}', function ($id) {
//     return "<h1>Saya siswa dengan ID $id</h1>";
// })->where('id', '[0-9]+');

// Route::get('/siswa/{id}/{nama}', function ($id, $nama) {
//     return "<h1>Saya siswa dengan ID $id</h1> Nama = $nama";
// })->where(['id' => '[0-9]+', 'nama' => '[A-Za-z]+']);


// Route::get('/siswa', [SiswaController::class, 'index']);
// Route::get('/siswa/{id}', [SiswaController::class, 'siswa'])->where('id', '[0-9]+');
// Route::get('/siswa/{id}/{nama}', [SiswaController::class, 'siswaDetail'])->where([
//     'id' => '[0-9]+',
//     'nama' => '[A-Za-z]+'
// ]);

Route::get('/', [HalamanController::class, 'index']);
Route::get('/siswa', [HalamanController::class, 'siswa']);
Route::get('/siswa/{nim}', [SiswaController::class, 'detail']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/about', [HalamanController::class, 'about']);
Route::get('/contact', [HalamanController::class, 'contact']);
