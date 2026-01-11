<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('profilePage');
    
});

Route::get('/test', function () {
    return 'This is a test route.';
});