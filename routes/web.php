<?php

use App\Http\Controllers\backend\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;

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
});
require __DIR__.'/auth.php';
