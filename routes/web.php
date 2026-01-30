<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoremController;
use App\Http\Controllers\generateText;

Route::get('/', [LoremController::class, 'showHome']);

Route::get('/js', [LoremController::class, 'withJs']);

Route::get('/api', [generateText::class, 'sentence']);

Route::get('/api/{type}/{size}', [generateText::class, 'index']);

Route::get('/api/{type}', [generateText::class, 'index']);

// Route::get('/api/{type}/{size}', function($type, $size) {
//     return [
//         'type' => $type,
//         'size' => $size,
//         'data' => fake()->paragraph($size)
//     ];
// });
