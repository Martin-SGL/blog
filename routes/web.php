<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostConstroller;

Route::get('/', [PostConstroller::class, 'index'])->name('posts.index');

Route::get('posts/{post}',[PostConstroller::class, 'show'])->name('posts.show');

Route::get('category/{category}',[PostConstroller::class, 'category'])->name('posts.category');

Route::get('tag/{tag}',[PostConstroller::class, 'tag'])->name('posts.tag');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
