<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $user = User::find(1);

    $user->featuredPosts()->create();

    dd($user->featuredPosts);
});
