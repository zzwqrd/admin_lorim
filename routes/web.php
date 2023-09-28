<?php

use App\Http\Controllers\Dashboard\Admin\LoginController;
use App\Http\Controllers\Dashboard\ProvidersController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [LoginController::class, 'get']);
    Route::post('login/post', [LoginController::class, 'post']);
});

Route::prefix('dashboard')->name('dashboard.')->middleware(['admin', 'lang'])->group(function () {

    Route::get('', [\App\Http\Controllers\Dashboard\HomeController::class, 'index'])->name('home');
    Route::get('/logout', [\App\Http\Controllers\Dashboard\Admin\LoginController::class, 'logout'])->name('logout');

    Route::prefix('admin')->group(function () {
        Route::get('index', [\App\Http\Controllers\Dashboard\Admin\AdminController::class, 'index'])->middleware('adminRole');

    });

    Route::prefix('user')->middleware('adminRole')->group(function () {
        Route::get('index', [\App\Http\Controllers\Dashboard\UserController::class, 'index']);
        Route::get('create', [\App\Http\Controllers\Dashboard\UserController::class, 'create']);
        Route::get('suspend/{id}', [\App\Http\Controllers\Dashboard\UserController::class, 'suspend']);
        Route::get('activate/{id}', [\App\Http\Controllers\Dashboard\UserController::class, 'activate']);
        Route::get('show/{id}', [\App\Http\Controllers\Dashboard\UserController::class, 'show']);
        Route::get('delete/{id}', [\App\Http\Controllers\Dashboard\UserController::class, 'delete']);
        Route::get('edit/{id}', [\App\Http\Controllers\Dashboard\UserController::class, 'edit']);
        Route::post('update/{id}', [\App\Http\Controllers\Dashboard\UserController::class, 'update']);
    });


    Route::prefix('section')->middleware('adminRole')->group(function () {
        Route::get('index', [\App\Http\Controllers\Dashboard\SectionController::class, 'index']);
        Route::get('create', [\App\Http\Controllers\Dashboard\SectionController::class, 'create']);
        Route::post('store', [\App\Http\Controllers\Dashboard\SectionController::class, 'store']);
        Route::get('edit/{id}', [\App\Http\Controllers\Dashboard\SectionController::class, 'edit']);
        Route::post('update', [\App\Http\Controllers\Dashboard\SectionController::class, 'update']);
        Route::get('destroy/{id}', [\App\Http\Controllers\Dashboard\SectionController::class, 'destroy']);
    });


    Route::prefix('sub_section')->middleware('adminRole')->group(function () {
        Route::get('index', [\App\Http\Controllers\Dashboard\SubSectionController::class, 'index']);
        Route::get('create', [\App\Http\Controllers\Dashboard\SubSectionController::class, 'create']);
        Route::post('store', [\App\Http\Controllers\Dashboard\SubSectionController::class, 'store']);
        Route::get('edit/{id}', [\App\Http\Controllers\Dashboard\SubSectionController::class, 'edit']);
        Route::post('update', [\App\Http\Controllers\Dashboard\SubSectionController::class, 'update']);
        Route::get('destroy/{id}', [\App\Http\Controllers\Dashboard\SubSectionController::class, 'destroy']);
    });

    Route::prefix('providers')->middleware('adminRole')->group(function () {

        // Route::resource('photos', ProvidersController::class);
        Route::get('index', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'index']);
        Route::get('show/{id}', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'show']);
        Route::get('create', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'create']);
        Route::post('store', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'store']);
        Route::get('edit/{id}', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'edit']);
        Route::post('update', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'update']);
        Route::get('destroy/{id}', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'destroy']);
    });

    Route::prefix('articles')->middleware('adminRole')->group(function () {

        Route::get('index', [\App\Http\Controllers\Dashboard\ArticlesController::class, 'index']);
        Route::get('create', [\App\Http\Controllers\Dashboard\ArticlesController::class, 'create']);
        Route::post('store', [\App\Http\Controllers\Dashboard\ArticlesController::class, 'store']);
        Route::get('destroy/{id}', [\App\Http\Controllers\Dashboard\ArticlesController::class, 'destroy']);
        Route::get('edit/{id}', [\App\Http\Controllers\Dashboard\ArticlesController::class, 'edit']);

        // Route::resource('articles', [\App\Http\Controllers\Dashboard\ArticlesController::class]);

    });


});
