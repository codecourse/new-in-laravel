<?php

use App\Http\Controllers\FileUploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FileUploadController::class, 'index'])->name('files.index');
Route::post('/files', [FileUploadController::class, 'store'])->name('files.store');
Route::get('/files/{file}', [FileUploadController::class, 'download'])->name('files.download');
