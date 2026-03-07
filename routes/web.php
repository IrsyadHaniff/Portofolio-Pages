<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', function () { 
    return view('home'); 
})->name('home');

Route::prefix('blog')->controller(BlogController::class)->group(function () {
    Route::get('/', 'index')->name('blog.index');
    Route::get('/about', 'about')->name('blog.about');
});

// Satu route, satu controller, satu view — untuk SEMUA artikel
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');
