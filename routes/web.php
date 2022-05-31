<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\CommentController;
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
Route::get('/forum/{slug}', [ForumController::class, 'displayForumPage']);
Route::get('/your-forum', [ForumController::class, 'displayYourForum']);
Route::get('/create', [ForumController::class, 'displayCreatePage']);
Route::post('/create', [ForumController::class, 'saveAndAdd']);
Route::post('/create/draft', [ForumController::class, 'saveDraft']);
Route::get('/update/forum/{id}', [ForumController::class, 'displayUpdatePage']);
Route::post('/update/forum/{id}', [ForumController::class, 'saveNew']);
Route::post('/update/forum/{id}/draft', [ForumController::class, 'saveNewDraft']);
Route::get('/delete/forum/{id}', [ForumController::class, 'deleteForum']);
Route::post('/like/forum/{id}', [ForumController::class, 'addLike']);
Route::post('/unlike/forum/{id}', [ForumController::class, 'removeLike']);
Route::post('/dislike/forum/{id}', [ForumController::class, 'addDislike']);
Route::post('/undislike/forum/{id}', [ForumController::class, 'removeDislike']);
Route::post('/forum/{slug}/comment', [CommentController::class, 'saveComment']);



// Route::get('/contoh', function () {
//     return view('contoh');
// });

// Route::get('/nama-forum', function () {
//     return view('halaman-forum');
// });
// Route::get('/your-forum', function (){
//     return view('your-forum');
// });

// Route::post('/like/{id}', [ForumController::class, 'addLike']);

// Route::post('/dislike/{id}', [ForumController::class, 'addDislike']);

// Route::get('/create', [ForumController::class, 'displayCreatePage']);
// Route::post('/create', [ForumController::class, 'saveAndAdd']);
// Route::get('/update/{id}', [ForumController::class, 'displayUpdatePage']);



// Route::get('/login', function () {
//     return view('halaman-login');
// });
