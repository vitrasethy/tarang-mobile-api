<?php

use App\Http\Controllers\FieldController;
use App\Http\Controllers\SportTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('fields', FieldController::class);
Route::apiResource('sport-type', SportTypeController::class);

require __DIR__.'/auth.php';
