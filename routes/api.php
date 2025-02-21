<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    app()->setLocale('en');
    return "Test";
});
