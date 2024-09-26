<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/tokens/create', [\App\Http\Controllers\ApiTokenController::class, 'createToken']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
