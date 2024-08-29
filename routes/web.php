<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/blog', function () {
    return view('frontend.blog.home');
})->name('blogs');
Route::get('/blog/{slug}', [PostController::class, 'index'])->name('blog');
Route::get('/blog/categories/{category}', [PostController::class, 'category'])->name('blog-category');
