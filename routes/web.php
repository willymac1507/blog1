<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

/**
 *  Web Routes
 * --------------------------------------------------------------------------
 *
 *  Here is where you can register web routes for your application. These
 *  routes are loaded by the RouteServiceProvider and all of them will
 *  be assigned to the "web" middleware group. Make something great!
 *
 */

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('post');
Route::post('posts/{post:slug}/comment', [CommentController::class, 'store'])->name('comment')->middleware('auth');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
