<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $users = cache()->flexible('users', [10, 20], function () {
        return User::get();
    });

    return view('home');
});
