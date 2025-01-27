<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('locked', function () {})
        ->name('locked');

    Route::get('create', function () {})
        ->name('locked.create');

});
