<?php

use App\Http\Controllers\ProfileController;  
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('home');
});
Route::get('/blog', [PostController::class, 'blog'])->name('blog.index');
Route::get('/blog/{slug}', [PostController::class, 'showBlog'])->name('blog.show');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('pages', PageController::class);
    Route::resource('posts', PostController::class);
    
});

require __DIR__.'/auth.php';
