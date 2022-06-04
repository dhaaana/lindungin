<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

Route::get('/your-forum', function (){
    return view('your-forum');
});

Route::get('/nama-forum', function () {
    return view('halaman-forum');

});

Route::get('/create', function () {
    return view('create');
});

Route::get('/update', function () {
    return view('update');
});


Route::get('/masuk', function () {
    return view('halaman-login');
});

Route::get('/register', [AuthController::class, 'display']);
Route::post('/register', [AuthController::class, 'saveUserData']);

Route::get('/lupapassword', function () {
    return view('halaman-lupa-password');
});
