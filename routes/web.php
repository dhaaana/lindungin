<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\AuthController;
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
Route::get('/search/forum', [ForumController::class, 'searchForum']);
Route::get('/categories/{category}', [ForumController::class, 'categoryForum']);
Route::get('/filter/{filter}', [ForumController::class, 'filterForum']);
Route::get('/your-forum', [ForumController::class, 'displayYourForum'])->middleware('auth');
Route::get('/create', [ForumController::class, 'displayCreatePage'])->middleware('auth');
Route::post('/create', [ForumController::class, 'saveAndAdd'])->middleware('auth');
Route::post('/create/draft', [ForumController::class, 'saveDraft'])->middleware('auth');
Route::get('/update/forum/{id}', [ForumController::class, 'displayUpdatePage'])->middleware('auth');
Route::post('/update/forum/{id}', [ForumController::class, 'saveNew'])->middleware('auth');
Route::post('/update/forum/{id}/draft', [ForumController::class, 'saveNewDraft'])->middleware('auth');
Route::get('/delete/forum/{id}', [ForumController::class, 'deleteForum'])->middleware('auth');
Route::post('/like/forum/{id}/{comment_id?}', [StatusController::class, 'addLike'])->middleware('auth');
Route::post('/unlike/forum/{id}/{comment_id?}', [StatusController::class, 'removeLike'])->middleware('auth');
Route::post('/dislike/forum/{id}/{comment_id?}', [StatusController::class, 'addDislike'])->middleware('auth');
Route::post('/undislike/forum/{id}/{comment_id?}', [StatusController::class, 'removeDislike'])->middleware('auth');
Route::post('/forum/{slug}/comment', [CommentController::class, 'saveComment'])->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'displayDashboard'])->middleware('auth')->middleware('verifikator');
Route::post('/verify/forum/{id}', [DashboardController::class, 'verifyForum'])->middleware('auth')->middleware('verifikator');
Route::get('/report/delete/forum/{id}', [DashboardController::class, 'deleteReportedForum'])->middleware('auth')->middleware('verifikator');
Route::get('/report/pass/forum/{id}', [DashboardController::class, 'resetForumReports'])->middleware('auth')->middleware('verifikator');
Route::post('/report/forum/{id}', [DashboardController::class, 'reportForum']);
Route::get('/pin/comment/{id}', [CommentController::class, 'pinComment'])->middleware('auth')->middleware('verifikator');
Route::get('/unpin/comment/{id}', [CommentController::class, 'unpinComment'])->middleware('auth')->middleware('verifikator');



Route::get('/register', [AuthController::class, 'display']);
Route::post('/register', [AuthController::class, 'saveUserData']);
Route::post('/logout', [AuthController::class, 'logout']);
