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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'main'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::post('get-weather', [\App\Http\Controllers\HomeController::class, 'main'])->name('get.weather');

    Route::get('channel/{city?}', [\App\Http\Controllers\HomeController::class, 'main'])
    ->name('channel');

    Route::post('create-alarm', [\App\Http\Controllers\AlarmController::class, 'store'])->name('create.alarm');
    Route::get('send-money', [\App\Http\Controllers\BankingController::class, 'send'])->name('send.money');
});
