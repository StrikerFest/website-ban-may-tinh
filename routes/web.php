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
use App\Http\Controllers\AdminBannerImageController;
use App\Http\Controllers\AdminPromotionController;
use App\Http\Controllers\AdminSubCategoryController;
use App\Http\Controllers\AdminSupplierController;
use App\Http\Controllers\AdminImportController;
use App\Http\Controllers\AdminInventoryController;
use Illuminate\Support\Facade;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryListController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\MoneyCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\SearchController;
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
Route::get('/dashboard/danhMucCon/{maDMC}', [DashboardController::class, "danhMucCon"])->name('dashboard.doanhMucCon');
Route::get('/dashboard/doanhThu12Thang/{nam}', [DashboardController::class, "doanhThu12Thang"])->name('dashboard.doanhThu12Thang');

Route::post('/loginProcessAdmin', [AdminLoginController::class, "loginProcess"])->name("administrator/loginProcess");
Route::post('/logoutProcessAdmin', [AdminLoginController::class, "logoutProcess"])->name("administrator/logoutProcess");

Route::prefix('admin')->middleware('CheckLogin')->name('admin.')->group(function () {
    Route::post('product/updateSpecial/{id}', [AdminProductController::class, "updateSpecial"])->name('product.updateSpecial');
    Route::resource('product', AdminProductController::class);
});
// Route::prefix('admin')->group(function () {
Route::group(['prefix' => 'admin', 'middleware' => 'CheckLogin'], function () {
    Route::resource('customer', AdminCustomerController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('employee', AdminEmployeeController::class);
    Route::resource('role', AdminRoleController::class);
    Route::resource('permission', AdminPermissionController::class);
    Route::resource('rolePermission', AdminRolePermissionController::class);
    Route::resource('productComment', AdminProductCommentController::class);
    Route::resource('productResponse', AdminProductResponseController::class);
    Route::get('productImage/{maSP}', [AdminProductImageController::class, "index"])->name('productImage.index');
    Route::resource('productImage', AdminProductImageController::class)->except(['index']);
    Route::resource('productStatus', AdminProductStatusController::class);
    Route::get('productSpecification/{maSP}', [AdminProductSpecificationController::class, "index"])->name('productSpecification.index');
    Route::resource('productSpecification', AdminProductSpecificationController::class)->except(['index']);
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
    Route::resource('bannerImage', AdminBannerImageController::class);
    Route::get('subCategory/{maTL}', [AdminSubCategoryController::class, "index"])->name('subCategory.index');
    Route::resource('subCategory', AdminSubCategoryController::class)->except(['index']);
    Route::get('promotion/{maSP}', [AdminPromotionController::class, "index"])->name('promotion.index');
    Route::resource('promotion', AdminPromotionController::class)->except(['index']);
    Route::resource('supplier', AdminSupplierController::class);
    Route::get('importProduct/{maNPP}', [AdminImportController::class, "get"])->name('import.get');
    Route::resource('import', AdminImportController::class);
    Route::resource('inventory', AdminInventoryController::class);
});

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

Route::resource('receiptCustomer', ReceiptController::class);

Route::resource('manufacturerCustomer', ManufacturerController::class);

Route::resource('categoryCustomer', CategoryController::class);

Route::resource('moneyCategoryCustomer', MoneyCategoryController::class);

Route::resource('searchCustomer', SearchController::class);

Route::resource('contactCustomer', ContactController::class);

Route::resource('customerCustomer', CustomerController::class);

Route::resource('changePasswordCustomer', ChangePasswordController::class);

Route::resource('categoryListCustomer', CategoryListController::class);

// Route::get('change-password', 'ChangePasswordController@index');
// Route::post('change-password', 'ChangePasswordController@store')->name('change.password');



Route::get('/test', function () {
    return view('Customer.Customer.index');
})->name("test");

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'goToCart'])->name('cart.go');
Route::post('cart-go', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
