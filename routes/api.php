<?php

use App\Http\Controllers\ControllerTipoTransaccion;
use App\Http\Controllers\TransaccionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('transaccions', TransaccionController::class);
Route::apiResource('tipos', ControllerTipoTransaccion::class);

