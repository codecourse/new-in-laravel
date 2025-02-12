<?php

use App\Models\Invoice;
use Illuminate\Support\Facades\Route;

// wherePast - any time in the past
// whereFuture - any time into the future
// whereNowOrPast - any time from now in the past
// whereNowOrFuture - any time from now into the future
// whereToday - any time today
// whereBeforeToday - any time in the past excluding the current day
// whereAfterToday - any time in the future excluding the current day

// all support 'or', e.g. orWhereBeforeToday

Route::get('/', function () {
    // Before
    $invoices = Invoice::query()
        ->where('due_at', '>=', now()->endOfDay())
        ->get()
        ->pluck('due_at')
        ->toArray();

    // After
    $invoices = Invoice::query()
        ->whereAfterToday('due_at')
        ->get()
        ->pluck('due_at')
        ->toArray();

    dd($invoices);
});
