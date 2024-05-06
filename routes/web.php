<?php

use App\Http\Controllers\FeedController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FeedController::class, 'index'])->name('feed');

Route::post('/idea', [IdeaController::class, 'store'])->name('idea.create');

Route::get('/terms', function () {
    return view('terms');
});
