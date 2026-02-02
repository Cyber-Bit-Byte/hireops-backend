<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    Route::post('/companies', [CompanyController::class, 'store']);
    Route::get('/companies', [CompanyController::class, 'index']);
});
