<?php

use App\Http\Controllers\Dashboard\Admin\LoginController;
use App\Http\Controllers\Dashboard\ProvidersController;
use Illuminate\Support\Facades\Route;

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('login', [LoginController::class, 'get']);
//     Route::post('login/post', [LoginController::class, 'post']);
// });


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [LoginController::class, 'get']);
    Route::post('login/post', [LoginController::class, 'post']);
    Route::get('forget-password','Admin\ForgetPasswordController@forgetPassword')->name('forgetPassword.get');
    Route::post('forget-password/post','Admin\ForgetPasswordController@forgetPasswordPost')->name('forgetPassword.post');
    Route::get('reset-password/{email}/{token}','Admin\ForgetPasswordController@resetPassword')->name('resetPassword.get');
    Route::post('reset-password/post','Admin\ForgetPasswordController@resetPasswordPost')->name('resetPassword.post');
});

Route::prefix('dashboard')->name('dashboard.')->middleware(['admin', 'lang'])->group(function () {

    Route::get('', [\App\Http\Controllers\Dashboard\HomeController::class, 'index'])->name('home');
    Route::get('/logout', [\App\Http\Controllers\Dashboard\Admin\LoginController::class, 'logout'])->name('logout');

    Route::prefix('admin')->group(function () {

        Route::get('index', [\App\Http\Controllers\Dashboard\Admin\AdminController::class, 'index'])->middleware('adminRole');
        Route::get('create', [\App\Http\Controllers\Dashboard\Admin\AdminController::class, 'create'])->middleware('adminRole');
        Route::post('store', [\App\Http\Controllers\Dashboard\Admin\AdminController::class, 'store'])->middleware('adminRole');
        Route::get('delete/{id}', [\App\Http\Controllers\Dashboard\Admin\AdminController::class, 'delete'])->middleware('adminRole');
        Route::get('change-password', [\App\Http\Controllers\Dashboard\Admin\ChangePasswordController::class, 'get'])->name('changePassword.get');
        Route::post('change-password.post', [\App\Http\Controllers\Dashboard\Admin\ChangePasswordController::class, 'post'])->name('changePassword.post');

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
        Route::get('showsub/{id}', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'showsub']);
        Route::get('create', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'create']);
        Route::post('store', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'store']);
        Route::get('edit/{id}', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'edit']);
        Route::post('update', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'update']);
        Route::get('destroy/{id}', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'destroy']);
        // Route::get('destroyItem/{id}', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'destroyItem']);
    });


    Route::prefix('ad')->middleware('adminRole')->group(function () {

        // Route::resource('photos', ProvidersController::class);
        Route::get('index', [\App\Http\Controllers\Dashboard\AdController::class, 'index']);
        Route::get('show/{id}', [\App\Http\Controllers\Dashboard\AdController::class, 'show']);
        Route::get('create', [\App\Http\Controllers\Dashboard\AdController::class, 'create']);
        Route::post('store', [\App\Http\Controllers\Dashboard\AdController::class, 'store']);
        Route::get('edit/{id}', [\App\Http\Controllers\Dashboard\AdController::class, 'edit']);
        Route::post('update', [\App\Http\Controllers\Dashboard\AdController::class, 'update']);
        Route::get('destroy/{id}', [\App\Http\Controllers\Dashboard\AdController::class, 'destroy']);
        // Route::get('destroyItem/{id}', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'destroyItem']);
    });

    Route::prefix('order')->middleware('adminRole')->group(function () {

        Route::get('/{type}', [\App\Http\Controllers\Dashboard\OrderController::class, 'index']);
        Route::get('show/{id}', [\App\Http\Controllers\Dashboard\OrderController::class, 'show']);
        Route::get('status/{id}/{status}', [\App\Http\Controllers\Dashboard\OrderController::class, 'status'])->name('orderStatus');


    });



    // للتجربة فقط

    Route::prefix('articles')->middleware('adminRole')->group(function () {

        Route::get('index', [\App\Http\Controllers\Dashboard\ArticlesController::class, 'index']);
        Route::get('create', [\App\Http\Controllers\Dashboard\ArticlesController::class, 'create']);
        Route::post('store', [\App\Http\Controllers\Dashboard\ArticlesController::class, 'store']);
        Route::get('destroy/{id}', [\App\Http\Controllers\Dashboard\ArticlesController::class, 'destroy']);
        Route::get('edit/{id}', [\App\Http\Controllers\Dashboard\ArticlesController::class, 'edit']);
        Route::post('update', [\App\Http\Controllers\Dashboard\ArticlesController::class, 'update']);

    });


});
