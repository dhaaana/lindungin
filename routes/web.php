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
    return view('halaman-utama');
});

Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/your-forum', function (){
    return view('your-forum');
});

Route::get('/home', function (){
    return view('halaman-utama');
});
