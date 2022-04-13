<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/triangle', [FormsController::class, 'triangle'])->name('triangle');
Route::post('/rectangle', [FormsController::class, 'rectangle'])->name('rectangle');
Route::get('/result', [FormsController::class, 'result'])->name('result');

