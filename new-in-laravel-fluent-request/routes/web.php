<?php

use App\Actions\CreateUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Fluent;

Route::get('/', function (Request $request) {
    (new CreateUser())->handle($request->fluent());
});
