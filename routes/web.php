<?php

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

Route::get('/', function () {
    return view('v_home');
});

Route::get('/mahasiswa', function () {
    return view('v_mahasiswa');
});

Route::view('/mahasiswa', 'v_mahasiswa');
Route::view('/dosen', 'v_dosen');
