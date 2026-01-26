<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoremController;
use App\Http\Controllers\generateText;

Route::get('/', [LoremController::class, 'showHome']);

Route::get('/api', [generateText::class, 'index']);

Route::get('/api/{type}/{size}', function($type, $size) {
    echo "Type: $type";
    echo "<br>";
    echo "Size: $size";
});
