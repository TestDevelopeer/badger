<?php

use App\Http\Controllers\API\V1\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'middleware' => 'auth:sanctum'], function () {
    // Articles
    Route::apiResource('/articles', ArticleController::class);

    // Author
    Route::get('/authors/{user}', [ArticleController::class, 'show'])->name('authors');
});
