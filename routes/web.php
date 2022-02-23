<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [DashboardController::class, "index"]);

Route::get('/login', [AdminLoginController::class, "login"])->name("administrator/login");
Route::get('/logout', [AdminLoginController::class, "logout"])->name("administrator/logout");

Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');

Route::post('/loginProcess', [AdminLoginController::class, "loginProcess"])->name("administrator/loginProcess");
Route::post('/logoutProcess', [AdminLoginController::class, "logoutProcess"])->name("administrator/logoutProcess");
