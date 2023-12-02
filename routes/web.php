<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authentication'])->name('login');
});

Route::middleware(['auth'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('home');

        Route::get('/account', [AccountController::class, 'index'])->name('account');
        Route::post('/account/create', [AccountController::class, 'create'])->name('account/create');
        Route::get('/account/edit/{user}', [AccountController::class, 'edit'])->name('account/edit');
        Route::put('/account/edit/{user}', [AccountController::class, 'update'])->name('account/update');
    });

    Route::middleware(['superadmin'])->group(function () {
        Route::get('/super', [DashboardController::class, 'index'])->name('user/delete');

        Route::delete('/account', [AccountController::class, 'delete'])->name('account/delete');
    });
});
