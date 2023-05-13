<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('innotive');
});

Route::post('register',[RegisterController::class, 'store'])->name('register');
Route::get('/innotive', [LoginController::class, 'index']);
Route::get('/innotive/logout', [LoginController::class, 'logout'])->name('logout'); //logout button blm ada
Route::post('innotive/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/dashboard', function () {
    return view('dashboard');
});