<?php

use Illuminate\Support\Facades\Route;

auth()->loginUsingId(2);

Route::get('/', function () {
    defer(function () {
        sleep(5);
        \Log::info('Logged');
    });

    dispatch(function () {
        \Log::info('Logged from queue');
    });

    return view('home');
});
