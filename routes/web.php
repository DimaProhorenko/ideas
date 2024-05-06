<?php

use App\Http\Controllers\FeedController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FeedController::class, 'index'])->name('feed');

Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('ideas.show');
Route::get('ideas/{idea}/edit', [IdeaController::class, 'edit'])->name('ideas.edit');
Route::put('/ideas/{idea}/update', [IdeaController::class, 'update'])->name('ideas.update');
Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store');
Route::delete('/ideas/{id}', [IdeaController::class, 'destroy'])->name('ideas.destroy');


Route::get('/terms', function () {
    return view('terms');
});
