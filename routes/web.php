<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\TagController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\UserController;

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

// Dashboard Group Routes
Route::prefix('dashboard')->middleware('auth')->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Category
    Route::resource('category', CategoryController::class);

    // Tag
    Route::resource('tag', TagController::class);

    // User
    Route::resource('user', UserController::class);
});
require __DIR__.'/auth.php';
