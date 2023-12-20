<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/// посты
Route::get('/', [PostController::class, 'index']);
Route::get('/post/add', [PostController::class, 'add']);
Route::get('/post/{post}', [PostController::class, 'post']);

Route::get('/post/{post}/edit', [PostController::class, 'edit']);
Route::get('/post/{post}/delete', [PostController::class, 'drop']);

Route::post('/post/add', [PostController::class, 'store']);
Route::post('/post/{post}/edit', [PostController::class, 'store']);


//комментарии
Route::get('/post/{post}/comment/add', [CommentController::class, 'add']);
Route::post('/post/{post}/comment/add', [CommentController::class, 'store']);
//модерация комментариев
Route::get('/admin', [CommentController::class, 'edit_comments']);
Route::get('/admin/{comment}/delete', [CommentController::class, 'drop']);


