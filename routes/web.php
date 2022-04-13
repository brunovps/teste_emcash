<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;


Route::get('/', function () {
    return view('welcome');
});

// Route::post('triangle', 'FormsController@triangle')->name('triangle');

