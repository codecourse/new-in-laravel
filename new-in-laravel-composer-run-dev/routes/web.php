<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    \Log::info('Hey');
    return response(null, 200);
});
