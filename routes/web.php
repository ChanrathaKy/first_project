<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route for listing posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route for creating a new post
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Route for showing a specific post
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

// Routes for editing a post
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

// Route for deleting a post
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
