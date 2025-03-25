<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    auth()->loginUsingId(1);

    dd(auth()->user()->latestDeployment);
});
