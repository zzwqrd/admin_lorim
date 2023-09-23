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

Route::prefix('dashboard')->name('dashboard.')->middleware(['admin', 'lang'])->group(function () {


    Route::get('', [\App\Http\Controllers\Dashboard\HomeController::class, 'index'])->name('home');
    Route::get('/logout', [\App\Http\Controllers\Dashboard\Admin\LoginController::class, 'logout'])->name('logout');

    // المديرين
    Route::prefix('admin')->group(function () {
        Route::get('index', [\App\Http\Controllers\Dashboard\Admin\AdminController::class, 'index'])->middleware('adminRole');

    });

    // المستخدمين
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

    // الاقسام الرئيسية
    Route::prefix('section')->middleware('adminRole')->group(function () {
        Route::get('index', [\App\Http\Controllers\Dashboard\SectionController::class, 'index']);
        Route::get('create', [\App\Http\Controllers\Dashboard\SectionController::class, 'create']);
        Route::post('store', [\App\Http\Controllers\Dashboard\SectionController::class, 'store']);
        Route::get('edit/{id}', [\App\Http\Controllers\Dashboard\SectionController::class, 'edit']);
        Route::post('update', [\App\Http\Controllers\Dashboard\SectionController::class, 'update']);
        Route::get('destroy/{id}', [\App\Http\Controllers\Dashboard\SectionController::class, 'destroy']);
    });

    // الاقسام الفرعية
    Route::prefix('sub_section')->middleware('adminRole')->group(function () {
        Route::get('index', [\App\Http\Controllers\Dashboard\SubSectionController::class, 'index']);
        Route::get('create', [\App\Http\Controllers\Dashboard\SubSectionController::class, 'create']);
        Route::post('store', [\App\Http\Controllers\Dashboard\SubSectionController::class, 'store']);
        Route::get('edit/{id}', [\App\Http\Controllers\Dashboard\SubSectionController::class, 'edit']);
        Route::post('update', [\App\Http\Controllers\Dashboard\SubSectionController::class, 'update']);
        Route::get('destroy/{id}', [\App\Http\Controllers\Dashboard\SubSectionController::class, 'destroy']);
    });

    // مقدمين الخدمة

    Route::prefix('providers')->middleware('adminRole')->group(function () {
        Route::get('index', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'index']);
        Route::get('show/{id}', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'show']);
        Route::get('create', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'create']);
        Route::post('store', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'store']);
        Route::get('edit/{id}', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'edit']);
        Route::post('update', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'update']);
        Route::get('destroy/{id}', [\App\Http\Controllers\Dashboard\ProvidersController::class, 'destroy']);
    });
});