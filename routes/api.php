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
        Route::post('forget', 'User\ResetPasswordController@sendCode');
        Route::post('check', 'User\ResetPasswordController@check');
        Route::post('reset', 'User\ResetPasswordController@resetPassword');
    });

});