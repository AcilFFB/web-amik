<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/detail/{id_mahasiswa}', [MahasiswaController::class, 'detail']);
Route::get('/mahasiswa/add', [MahasiswaController::class, 'add']);
Route::post('/mahasiswa/insert', [MahasiswaController::class, 'insert']);
Route::get('/mahasiswa/edit/{id_mahasiswa}', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update/{id_mahasiswa}', [MahasiswaController::class, 'update']);

Route::get('dosen', [DosenController::class, 'index']);

