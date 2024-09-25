<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use function Illuminate\Log\log;

Route::get('/', function () {
    log('Logged from log', User::find(1)->toArray());
});
