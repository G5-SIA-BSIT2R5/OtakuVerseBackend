<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;

// Public routes
Route::post('register', [AuthController::class, 'register']);
Route::post('login',    [AuthController::class, 'login']);
Route::post('password/email', [PasswordResetController::class, 'sendResetLink']);
Route::post('password/reset', [PasswordResetController::class, 'resetPassword']);

// Protected route example
Route::middleware('jwt.auth')->group(function () {
    Route::get('/user', function () {
        return auth()->user();
    });
});
