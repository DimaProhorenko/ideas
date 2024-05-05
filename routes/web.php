<?php

use App\Http\Controllers\FeedController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FeedController::class, 'index']);

Route::get('/terms', function () {
    return view('terms');
});
