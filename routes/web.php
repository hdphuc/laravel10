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
    Route::post('/login', [App\Http\Controllers\Admin\LoginController::class, 'postLogin'])->name('.postLogin');
    Route::get('/logout', [App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('.logout');
    Route::get('/register', [App\Http\Controllers\Admin\LoginController::class, 'register'])->name('.register');
    Route::post('/register', [App\Http\Controllers\Admin\LoginController::class, 'postRegister'])->name('.postRegister');
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('.dashboard');

    // Login Line
    Route::get('/login/line', [App\Http\Controllers\Admin\LoginController::class, 'redirectToLine'])->name('.login.line');
    // Callback url
    Route::get('/login/line/callback', [App\Http\Controllers\Admin\LoginController::class, 'handleLineCallback'])->name('.login.line.callback');

    Route::name('.users')
    ->prefix('users')
    ->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('.index');
        Route::get('/profile', [App\Http\Controllers\Admin\UserController::class, 'profile'])->name('.profile');
    });

    Route::name('.payments')
    ->prefix('payments')
    ->group(function () {
        Route::get('/billing', [App\Http\Controllers\Admin\PaymentController::class, 'billing'])->name('.billing');
    });

    Route::name('.posts')
    ->prefix('posts')
    ->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('.index');
        Route::get('/add', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('.add');
        Route::post('/add', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('.store');
        Route::get('/{id}', [App\Http\Controllers\Admin\PostController::class, 'show'])->name('.show');
        Route::get('/{id}/edit', [App\Http\Controllers\Admin\PostController::class, 'edit'])->name('.edit');
        Route::put('/{id}', [App\Http\Controllers\Admin\PostController::class, 'update'])->name('.update');
        Route::delete('/{id}', [App\Http\Controllers\Admin\PostController::class, 'destroy'])->name('.destroy');
    });

    Route::name('.categories')
    ->prefix('categories')
    ->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\CategoriesController::class, 'index'])->name('.index');
        Route::get('/add', [App\Http\Controllers\Admin\CategoriesController::class, 'create'])->name('.add');
        Route::post('/add', [App\Http\Controllers\Admin\CategoriesController::class, 'store'])->name('.store');
        Route::get('/{id}', [App\Http\Controllers\Admin\CategoriesController::class, 'show'])->name('.show');
        Route::get('/{id}/edit', [App\Http\Controllers\Admin\CategoriesController::class, 'edit'])->name('.edit');
        Route::put('/{id}', [App\Http\Controllers\Admin\CategoriesController::class, 'update'])->name('.update');
        Route::delete('/{id}', [App\Http\Controllers\Admin\CategoriesController::class, 'destroy'])->name('.destroy');
    });
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

Route::name('cv')
->prefix('cv')
->group(function () {
    Route::get('/', [\App\Http\Controllers\Web\Cv\CvController::class, 'index'])->name('.homepagecv');
    
    Route::name('.projects')
        ->prefix('projects')
        ->group(function () {
            Route::get('/{url}', [App\Http\Controllers\Web\Cv\CvController::class, 'show'])->name('.detail');
        });
});

Route::get('/chat',  [App\Http\Controllers\Web\ChatController::class, 'index'])->name('chat.index');
Route::post('/send-message', [App\Http\Controllers\Web\ChatController::class, 'sendMessage'])->name('chat.send.message');
Route::post('/pusher/webhook', [App\Http\Controllers\Web\PusherWebhookController::class, 'handleWebhook'])->name('pusher.webhook');

