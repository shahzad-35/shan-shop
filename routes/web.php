<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\UserController;
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


Route::get('/', [HomeController::class, 'homePage'])->name('home');

Route::get('/add-category', [CategoryController::class, 'addCategoryForm'])->middleware('auth')->name('add-category');
Route::post('/store/category', [CategoryController::class, 'storeCtaegory'])->name('store-category');
Route::get('/categories', [CategoryController::class, 'getAllCategories'])->name('all-categories');

Route::get('/add-product', [ProductController::class, 'addProduct'])->middleware('auth')->name('add-product-form');
Route::get('/detail-page', [ProductController::class, 'getDetails'])->middleware('auth')->name('detail-page');
Route::get('/products', [ProductController::class, 'getProducts'])->name('all-products');
Route::post('/store-product', [ProductController::class, 'storeProduct'])->name('store-product');

Route::get('/category/{id}', [CategoryController::class, 'getProductsByCategory'])->name('category-by-id');

Route::post('login', [UserController::class, 'login'])->name('login');
Route::get('/login', [UserController::class, 'loginForm']);

Route::get('remove-category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete-categories');
Route::get('remove-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');

Route::get('edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit-product');
Route::post('/update-product', [ProductController::class, 'updateProduct'])->name('update-product');