<?php

use Illuminate\Support\Facades\Route;


Route::resource('images', 'ImageController');

Route::get('/', function () {
    return view('welcome');
});
