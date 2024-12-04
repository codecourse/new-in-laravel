<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Number;

Route::get('/', function () {
    dd(Number::ordinal(1));
    dd(Number::spellOrdinal(1));
});
