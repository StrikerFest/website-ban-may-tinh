<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminEmployeeController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminPermissionController;
use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\AdminRolePermissionController;
use App\Http\Controllers\CustomerLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminProductStatusController;
use App\Http\Controllers\AdminBlogStatusController;
use App\Http\Controllers\AdminReceiptStatusController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminManufacturerController;
use App\Http\Controllers\AdminPaymentMethodController;
use App\Http\Controllers\AdminSpecificationController;
use App\Http\Controllers\AdminCategorySpecificationController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminProductCommentController;
use App\Http\Controllers\AdminProductResponseController;
use App\Http\Controllers\AdminProductImageController;
use App\Http\Controllers\AdminProductSpecificationController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminBlogCommentController;
use App\Http\Controllers\AdminBlogResponseController;
use App\Http\Controllers\AdminReceiptController;
use App\Http\Controllers\AdminDetailReceiptController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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
Route::resource('admin', AdminController::class);
Route::resource('employee', AdminEmployeeController::class);
Route::resource('role', AdminRoleController::class);
Route::resource('permission', AdminPermissionController::class);
Route::resource('rolePermission', AdminRolePermissionController::class);
Route::resource('product', AdminProductController::class);
Route::resource('productComment', AdminProductCommentController::class);
Route::resource('productResponse', AdminProductResponseController::class);
Route::resource('productImage', AdminProductImageController::class);
Route::resource('productStatus', AdminProductStatusController::class);
Route::resource('productSpecification', AdminProductSpecificationController::class);
Route::resource('blog', AdminBlogController::class);
Route::resource('blogComment', AdminBlogCommentController::class);
Route::resource('blogResponse', AdminBlogResponseController::class);
Route::resource('blogStatus', AdminBlogStatusController::class);
Route::resource('category', AdminCategoryController::class);
Route::get('categorySpecification/{maTL}', [AdminCategorySpecificationController::class, "index"])->name('categorySpecification.index');
Route::resource('categorySpecification', AdminCategorySpecificationController::class)->except(['index']);
Route::resource('receipt', AdminReceiptController::class);
Route::resource('receiptStatus', AdminReceiptStatusController::class);
Route::resource('detailReceipt', AdminDetailReceiptController::class);
Route::resource('paymentMethod', AdminPaymentMethodController::class);
Route::resource('manufacturer', AdminManufacturerController::class);
Route::resource('specification', AdminSpecificationController::class);

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

Route::resource('product', ProductController::class);

Route::get('/test', function () {
    return view('Customer.Customer.index');
})->name("test");

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
