<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello World from Jeni!';
});

Route::get('/module2a/price_engine_refactored.php', function () {
    return include public_path('module2a/price_engine_refactored.php');
});

Route::get('/module2b/cosmic_calendar.php', function () {
    return include public_path('module2b/cosmic_calendar.php');
});