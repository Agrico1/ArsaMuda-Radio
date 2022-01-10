<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('index');
});

// user cotroler
Route::get('/login_user', [UserController::class, 'login_page']);
Route::post('/daftar', [UserController::class, 'daftar']);
Route::post('/auth', [UserController::class, 'masuk']);
Route::post('/logout', [UserController::class, 'logout']);
