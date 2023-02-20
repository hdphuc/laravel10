<?php

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



Route::name('admin')
->prefix('admin')
->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('.index');
    Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'index'])->name('.login.index');
    Route::get('/register', [App\Http\Controllers\Admin\LoginController::class, 'register'])->name('.register');
    Route::post('/register', [App\Http\Controllers\Admin\LoginController::class, 'postRegister'])->name('.postRegister');
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('.dashboard');
});

Route::name('web')
->group(function () {
    Route::get('/', function () {return view('home');})->name('.homepage');

    Route::name('.pages')
        ->prefix('pages')
        ->group(function () {
            Route::get('/{url}', [App\Http\Controllers\Web\PagesController::class, 'show'])->name('.show');
        });
});