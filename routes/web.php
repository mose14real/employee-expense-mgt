<?php

use App\Http\Controllers\EmployeeExpenseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('employee');
    // Route::post('register', 'create')->name('register');
    // Route::post('store', 'store')->name('store');
    Route::get('login', 'login')->name('login');
    Route::post('auth-login', 'authLogin')->name('auth-login');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(EmployeeExpenseController::class)->group(function () {
        Route::prefix('expense-manager')->group(function () {
            Route::get('dashboard', 'dashboard')->name('expense-manager/dashboard');
            Route::get('logout', 'logout')->name('expense-manager/logout');
        });
    });
});
