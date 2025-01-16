<?php

use App\Deployment\CreateServer;
use App\Deployment\InstallPHP;
use App\Models\Deployment;
use Illuminate\Support\Facades\Pipeline;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $deployment = Deployment::create();

    // Before
    //try {
    //    Pipeline::send($deployment)
    //        ->through([CreateServer::class, InstallPHP::class])
    //        ->then(fn() => $deployment->touch('deployed_at'));
    //} finally {
    //    $deployment->touch('stopped_at');
    //    // do some other tidying up here
    //}

    // After
    Pipeline::send($deployment)
        ->through([CreateServer::class, InstallPHP::class])
        ->finally(function () use ($deployment) {
            $deployment->touch('stopped_at');
        })
        ->then(fn() => $deployment->touch('deployed_at'));
});
