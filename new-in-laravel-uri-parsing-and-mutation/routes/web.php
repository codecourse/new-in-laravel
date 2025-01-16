<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Uri;

Route::get('/', function (Request $request) {
    //$uri = Uri::of('https://codecourse.com?page=2&category=laravel#section');
    //dd($uri->query()->all());

    //$uri = (new Uri())
    //    ->withHost('codecourse.com')
    //    ->withScheme('https')
    //    ->withQuery(['page' => 1, 'category' => 'laravel'])
    //    ->withFragment('section');

    //$uri = Uri::of('http://codecourse.com')
    //    ->withScheme('https');

    //dd((string) $uri);

    //dd(Uri::of('ftp://alex:password@codecourse.com')->password());

    //dd((string) $request->uri()->withScheme('http'));

    //$redirect = Uri::to('/')->withQuery(['page' => 1]);

    $redirect = Uri::route('dashboard')->withQuery(['page' => 1])->withScheme('https')->withFragment('section');

    dd((string) $redirect);
});

Route::get('/dashboard', fn () => 'Dashboard')
    ->name('dashboard');
