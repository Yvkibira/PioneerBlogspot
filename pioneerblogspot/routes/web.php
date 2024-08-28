<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/Blog', function () {
    return view('frontend.blog.home');
})->name('blogs');
Route::get('/Blog/{slug}', [PostController::class, 'index'])->name('blog');
Route::get('/Blog/Categories/{category}', [PostController::class, 'category'])->name('blog-category');
