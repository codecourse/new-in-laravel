<?php

use App\Http\Middleware\ProductionOnlyMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Route as RouteObject;

Route::get('/', function () {
    //
});

Route::get('/middleware', fn () => 'middleware')
    ->middleware(ProductionOnlyMiddleware::class)
    ->when(app()->isLocal(), function (RouteObject $route) {
        $route->withoutMiddleware(ProductionOnlyMiddleware::class);
    });

//Route::get('/limited', fn () => 'limited')
//    ->middleware('throttle:5')
//    ->when(app()->isLocal(), function (RouteObject $route) {
//        $route->withoutMiddleware('throttle:5');
//    });

Route::get('/limited', fn () => 'limited')
    ->when(app()->isProduction(), function (RouteObject $route) {
        $route->middleware('throttle:5');
    });
