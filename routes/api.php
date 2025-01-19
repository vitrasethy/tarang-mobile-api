<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\SportTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/user', [AuthenticatedSessionController::class, 'getUser'])->middleware('auth:sanctum');

Route::apiResource('fields', FieldController::class);
Route::apiResource('sport-type', SportTypeController::class);
Route::apiResource('bookings', BookingController::class);

Route::get('/test/fields', function () {
    return response()->json([
        'status' => "successful",
        'message' => 'successful',
        'data' => [
            ['name' => 'soccer'],
        ],
    ]);
});

require __DIR__ . '/auth.php';
