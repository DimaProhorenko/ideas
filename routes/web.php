<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FeedController::class, 'index'])->name('feed');

Route::group([
    'prefix' => 'ideas',
    'as' => 'ideas.',
    'middleware' => ['auth']
], function () {
    Route::get('/{idea}', [IdeaController::class, 'show'])->name('show')->withoutMiddleware(['auth']);
    Route::get('/{idea}/edit', [IdeaController::class, 'edit'])->name('edit');
    Route::put('/{idea}/update', [IdeaController::class, 'update'])->name('update');
    Route::post('', [IdeaController::class, 'store'])->name('store');
    Route::delete('{id}', [IdeaController::class, 'destroy'])->name('destroy');

    Route::post('/{idea}/comments', [CommentController::class, 'store'])->name('comments.store');
});

Route::resource('users', UserController::class)->only('show', 'edit', 'update')->middleware(['auth']);
Route::get('profile', [UserController::class, 'profile'])->name('profile')->middleware(['auth']);

Route::post('/users/{user}/follow', [FollowerController::class, 'follow'])->middleware(['auth'])->name('users.follow');
Route::post('/users/{user}/unfollow', [FollowerController::class, 'unfollow'])->middleware(['auth'])->name('users.unfollow');


Route::post('/ideas/{idea}/like', [LikeController::class, 'store'])->middleware(['auth'])->name('ideas.like');
Route::delete('/ideas/{idea}/unlike', [LikeController::class, 'destroy'])->middleware(['auth'])->name('ideas.unlike');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');
