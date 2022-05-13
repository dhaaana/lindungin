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


Route::get('/namaForum', function () {
    return view('halaman-forum');
});

Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/forgetPW', function () {
    return view('halaman-forget');
});
