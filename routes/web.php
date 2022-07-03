<?php

use Illuminate\Support\Facades\Route;
use App\Models\mahasiswa;
use App\Http\Controllers\mahasiswacontroller;
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
    return view('welcome');
});
Route::get('mahasiswa', [mahasiswacontroller::class, 'index']);
Route::get('mahasiswa/tambah', [mahasiswacontroller::class, 'tambah_mahasiswa']);
Route::post('mahasiswa/simpan', [mahasiswacontroller::class, 'simpan_mahasiswa']);
Route::get('mahasiswa/edit/{id}', [mahasiswacontroller::class, 'edit_mahasiswa']);
Route::put('mahasiswa/update/{id}', [mahasiswacontroller::class, 'update_mahasiswa']);
Route::get('campus', function () {
    return view('campus');
});
Route::get('formpendaftaran', function () {
    return view('formpendaftaran');
});
Route::get('ngetestcss', function () {
    return view('ngetestcss');
});
Route::get('form', function () {
    return view('form');
});
Route::get('absen', function () {
    return view('absen');
});
