<?php

use Illuminate\Support\Facades\Route;


Route::resource('images', 'ImageController');

Route::get('/', function () {
    return view('welcome');
});


kkkkkkkkkkkk

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome');
// });