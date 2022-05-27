<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumController;

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

Route::get('/', [ForumController::class, 'displayAllForum']);

Route::get('/search', [UserController::class, 'search'])->name('search');


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


Route::get('/login', function () {
    return view('halaman-login');
});

