<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd(User::get());
});
