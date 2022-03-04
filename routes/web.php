<?php

use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CustomerLoginController;
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


// ADMIN======================
// ===========================
// ===========================

Route::get('/login/Admin', [AdminLoginController::class, "login"])->name("administrator/login");
Route::get('/logout/Admin', [AdminLoginController::class, "logout"])->name("administrator/logout");

Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');

Route::post('/loginProcessAdmin', [AdminLoginController::class, "loginProcess"])->name("administrator/loginProcess");
Route::post('/logoutProcessAdmin', [AdminLoginController::class, "logoutProcess"])->name("administrator/logoutProcess");

Route::resource('customer', AdminCustomerController::class);

Route::get('/testAdmin', function () {
    return view('Admin.Customer.index');
})->name("testAdmin");

// CUSTOMER===================
// ===========================
// ===========================

Route::get('/', [CustomerLoginController::class, "login"]);

Route::get('/login', [CustomerLoginController::class, "login"])->name("login");
Route::get('/logout', [CustomerLoginController::class, "logout"])->name("logout");

Route::post('/loginProcess', [CustomerLoginController::class, "loginProcess"])->name("loginProcess");
Route::post('/logoutProcess', [CustomerLoginController::class, "logoutProcess"])->name("logoutProcess");

Route::get('/test', function () {
    return view('Customer.Customer.index');
})->name("test");
