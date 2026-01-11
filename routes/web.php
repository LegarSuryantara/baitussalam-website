<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
<<<<<<< HEAD
    return view('profilePage');
=======
    return view('welcome');
>>>>>>> 5f33bf4ba3143564488421d7da9718282f91fcc7
});

Route::get('/test', function () {
    return 'This is a test route.';
});