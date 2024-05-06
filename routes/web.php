<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FeedController::class, 'index'])->name('feed');

Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('ideas.show');
Route::get('ideas/{idea}/edit', [IdeaController::class, 'edit'])->name('ideas.edit')->middleware('auth');
Route::put('/ideas/{idea}/update', [IdeaController::class, 'update'])->name('ideas.update')->middleware('auth');
Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store')->middleware('auth');
Route::delete('/ideas/{id}', [IdeaController::class, 'destroy'])->name('ideas.destroy')->middleware('auth');

Route::post('/ideas/{idea}/comments', [CommentController::class, 'store'])->name('ideas.comments.store')->middleware('auth');

// AUTH
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/terms', function () {
    return view('terms');
});
