<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MarketPlaceController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});


Route::controller(MarketPlaceController::class)->group(function () {
    Route::get('/marketplace', 'index')->name('marketplace');
    Route::get('/marketplace/detail/{project}', 'details')->name('marketplace.details');
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::get('/marketplace/create', 'create')->name('marketplace.create');
        Route::post('/marketplace/store', 'store')->name('marketplace.store');
        Route::get('/dashboard', 'projectOwner')->name('dashboard');
        Route::post('/marketplace/store/{project}', 'update')->name('marketplace.update');
        Route::post('/marketplace/delete/{project}', 'delete')->name('marketplace.delete');
        Route::get('/marketplace/interest/{project}', 'interest')->name('marketplace.interest');
        Route::get('/me/interest', 'meInterest')->name('me.interest');
        Route::post('/me/post/{project}', 'post')->name('post');
        Route::post('/me/post/delete/{project}/{post}', 'deletePost')->name('post.delete');
    });
});

Route::get('auth/google', [LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);
