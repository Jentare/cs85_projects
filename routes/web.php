<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello World from Jeni!';
});
Route::get('/module2a/price-engine', function () {
    require base_path('module2a/price_engine.php');
});
Route::get('/module2a/price-engine-ref', function () {
    require base_path('module2a/price_engine_refactored.php');
});