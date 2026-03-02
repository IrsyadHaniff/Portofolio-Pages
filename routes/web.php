<?php

use App\Http\Controllers\BlogController;
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

// dst...