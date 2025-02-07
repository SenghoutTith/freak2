<?php

use App\Http\Controllers\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// get all blogs
Route::get('blog-all', [BlogController::class, 'getBlogs'])->name('blog.getAll');

Route::post('blog', [BlogController::class, 'store'])->name('blog.store');
