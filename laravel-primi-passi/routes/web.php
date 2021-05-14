<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('mainPage');
});

Route::get('hello', function () {
    return view('hello');
});
