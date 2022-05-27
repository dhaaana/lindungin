<?php

use App\Http\Controllers\ForumController;
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

Route::get('/your-forum', function (){
    return view('your-forum');
});

// By Wahyu
// UC02.03 Like, Dislike, Report Forum
Route::get('/{id}', [ForumController::class, 'displayForumPage']);

Route::post('/like/{id}', [ForumController::class, 'addLike']);

Route::post('/dislike/{id}', [ForumController::class, 'addDislike']);

Route::get('/create', function () {
    return view('create');
});

Route::get('/update', function () {
    return view('update');
});


Route::get('/login', function () {
    return view('halaman-login');
});

