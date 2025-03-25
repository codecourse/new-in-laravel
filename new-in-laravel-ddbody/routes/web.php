<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', function () {
    //return view('home');

    return response()->json([
        'name' => 'Mabel',
        'type' => 'cat'
    ]);
});
