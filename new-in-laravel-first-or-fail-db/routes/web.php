<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //$user = User::where('email', 'alex@codecourse.com')->firstOrFail();

    $user = DB::table('users')->where('email', 'mabel@codecourse.com')->firstOrFail();

    dd($user);
});
