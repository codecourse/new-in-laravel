<?php

use App\Jobs\ProcessPodcast;
use App\Models\Podcast;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    ProcessPodcast::dispatch(Podcast::find(1));
});
