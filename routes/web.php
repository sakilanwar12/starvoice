<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



// blog controller


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/post', [PostController::class, 'index'])->name('admin.post.index');
    Route::get('/admin/post/create', [PostController::class, 'create'])->name('admin.post.create');
    Route::post('/admin/post', [PostController::class, 'store'])->name('admin.post.store');
    Route::get('/admin/post/{post}', [PostController::class, 'show'])->name('admin.post.show');
    Route::get('/admin/post/{id}/edit', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::patch('/admin/post/{id}', [PostController::class, 'update'])->name('admin.post.update');
    Route::delete('/admin/post/{id}', [PostController::class, 'destroy'])->name('admin.post.destroy');
});
