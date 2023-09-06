<?php


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard.home');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [\App\Http\Controllers\Dashboard\Admin\LoginController::class, 'get']);
    Route::post('login/post', [\App\Http\Controllers\Dashboard\Admin\LoginController::class, 'post']);
});

Route::prefix('dashboard')->name('dashboard.')->middleware('admin')->group(function () {
    Route::get('', [\App\Http\Controllers\Dashboard\HomeController::class, 'index'])->name('home');
    Route::get('/logout', [\App\Http\Controllers\Dashboard\Admin\LoginController::class, 'logout'])->name('logout');

    Route::prefix('section')->middleware('adminRole')->group(function () {
        Route::get('index', [\App\Http\Controllers\Dashboard\SectionController::class, 'index']);
        Route::get('create', [\App\Http\Controllers\Dashboard\SectionController::class, 'create']);
        Route::post('store', [\App\Http\Controllers\Dashboard\SectionController::class, 'store']);
    });
});