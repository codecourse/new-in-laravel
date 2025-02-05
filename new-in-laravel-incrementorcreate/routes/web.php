<?php

use App\Models\Visit;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Visit::incrementOrCreate([
        'ip_address' => request()->ip(),
    ], 'count');

    //$visit = Visit::firstOrCreate([
    //    'ip_address' => request()->ip()
    //], [
    //    'count' => 1
    //]);
    //
    //if (!$visit->wasRecentlyCreated) {
    //    $visit->increment('count');
    //}
});
