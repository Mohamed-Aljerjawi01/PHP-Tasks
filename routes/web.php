<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/TaskOne', function () {
    // return ('TaskOne');
    return view('TaskOne');
});
