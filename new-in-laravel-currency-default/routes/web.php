<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Number;

Route::get('/', function () {
    //dd(Number::currency(1000, 'GBP'));

    //Number::useCurrency('GBP');
    dd(Number::currency(1000));
});
