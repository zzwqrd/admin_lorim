<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('user')->group(function () {
    Route::post('register', [\App\Http\Controllers\Api\User\RegisterController::class, 'register']);
    Route::post('verify', [\App\Http\Controllers\Api\User\VerifyController::class, 'verify']);
    Route::post('resend_verification_code', [\App\Http\Controllers\Api\User\VerifyController::class, 'resend']);
    Route::post('login', [\App\Http\Controllers\Api\User\LoginController::class, 'login']);


    Route::prefix('password')->group(function () {
        Route::post('forget', [\App\Http\Controllers\Api\User\ResetPasswordController::class, 'sendCode']);
        Route::post('check', [\App\Http\Controllers\Api\User\ResetPasswordController::class, 'check']);
        Route::post('reset', [\App\Http\Controllers\Api\User\ResetPasswordController::class, 'resetPassword']);
    });

});


Route::middleware('apiAuth')->group(function () {

    Route::prefix('sections')->group(function () {
        Route::get('index', [\App\Http\Controllers\Api\SectionController::class, 'index']);
        Route::get('show_sub/{id}', [\App\Http\Controllers\Api\SectionController::class, 'show_sub']);
    });


    Route::prefix('provider')->group(function () {
        Route::get('index', [\App\Http\Controllers\Api\ProvidersController::class, 'index']);
        // Route::get('show_provider/{id}', [\App\Http\Controllers\Api\ProvidersController::class, 'show_provider']);
        Route::get('show/{id}', [\App\Http\Controllers\Api\ProvidersController::class, 'show']);
    });

});
