<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PostController::class, 'home']);
Route::get('/posts', [PostController::class, 'listPosts']);
Route::get('/posts/create', [PostController::class, 'createSamplePost']);