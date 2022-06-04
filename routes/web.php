<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
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
Route::get('/search', [ForumController::class, 'searchForum']);
Route::get('/categories', [ForumController::class, 'displayForumByCategories']);
Route::get('/filter', [ForumController::class, 'displayForumByFilter']);
Route::get('/your-forum', [ForumController::class, 'displayYourForum']);
Route::get('/create', [ForumController::class, 'displayCreatePage']);
Route::post('/create', [ForumController::class, 'saveAndAdd']);
Route::post('/create/draft', [ForumController::class, 'saveDraft']);
Route::get('/update/forum/{id}', [ForumController::class, 'displayUpdatePage']);
Route::post('/update/forum/{id}', [ForumController::class, 'saveNew']);
Route::post('/update/forum/{id}/draft', [ForumController::class, 'saveNewDraft']);
Route::get('/delete/forum/{id}', [ForumController::class, 'deleteForum']);
Route::post('forum/like/{id}/{comment_id?}', [StatusController::class, 'addLike']);
Route::post('forum/unlike/{id}/{comment_id?}', [StatusController::class, 'removeLike']);
Route::post('forum/dislike/{id}/{comment_id?}', [StatusController::class, 'addDislike']);
Route::post('forum/undislike/{id}/{comment_id?}', [StatusController::class, 'removeDislike']);
Route::post('/forum/{slug}/comment', [CommentController::class, 'saveComment']);
Route::get('/dashboard', [DashboardController::class, 'displayDashboard']);
Route::post('/verify/forum/{id}', [StatusController::class, 'verifyFOrum']);



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
