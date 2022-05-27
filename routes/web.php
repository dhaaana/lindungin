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

Route::get('/', [ForumController::class, 'displayAllForum']);
Route::get('/your-forum', [ForumController::class, 'displayYourForum']);
Route::get('/search', [UserController::class, 'search'])->name('search');


Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/nama-forum', function () {
    return view('halaman-forum');
Route::get('/your-forum', function (){
    return view('your-forum');
});

// By Wahyu
// UC02.03 Like, Dislike, Report Forum
Route::get('/{id}', [ForumController::class, 'displayForumPage']);

Route::post('/like/{id}', [ForumController::class, 'addLike']);

Route::post('/dislike/{id}', [ForumController::class, 'addDislike']);

Route::get('/create', [ForumController::class, 'displayCreatePage']);
Route::post('/create', [ForumController::class, 'saveAndAdd']);
Route::get('/update/{id}', [ForumController::class, 'displayUpdatePage']);



Route::get('/login', function () {
    return view('halaman-login');
});

