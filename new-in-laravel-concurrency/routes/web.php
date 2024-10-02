<?php

use App\Models\User;
use Illuminate\Support\Facades\Concurrency;
use Illuminate\Support\Facades\Route;

// Basic usage example
Route::get('/', function () {
    [$first, $second] = Concurrency::run([
        function () {
            sleep(3);
            return 'First';
        },
        function () {
            sleep(3);
            return 'Second';
        },
    ]);

    dd($first, $second);
});

// Not the best idea, actually slower!
Route::get('/', function () {
    [$users, $deletedUsers] = Concurrency::run([
        fn () => User::get(),
        fn () => User::onlyTrashed()->get()
    ]);

    return view('home', [
        'users' => $users,
        'deletedUsers' => $deletedUsers
    ]);
});
