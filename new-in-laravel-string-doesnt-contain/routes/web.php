<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $string = 'I love dogs';

    if (str()->doesntContain($string, 'cat')) {
        dd('String must contain cat');
    }
});
