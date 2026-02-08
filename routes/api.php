<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\CvController;

// Public login route (custom, session-free)
Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (! Auth::attempt($request->only('email', 'password'))) {
        return response()->json([
            'message' => 'The provided credentials are incorrect.'
        ], 401);
    }

    $user = Auth::user();
    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'token' => $token,
        'user' => $user
    ]);
});

// Authenticated user info
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Admin only routes (Spatie role middleware)
Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    Route::apiResource('companies', CompanyController::class);
});


