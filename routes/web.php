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


Route::get('/',[HomeController::class,'homePage'])->name('home');

Route::get('/add-category',[CategoryController::class,'addCategoryForm'])->middleware('auth');
Route::post('/add/category', [CategoryController::class, 'storeCtaegory'])->name('add-category');
Route::get('/categories', [CategoryController::class, 'getAllCategories'])->name('all-categories');

Route::get('/add-product',[ProductController::class,'addProduct'])->middleware('auth')->name('add-product-form');
Route::get('/products', [ProductController::class, 'getProducts'])->name('all-products');
Route::post('/add-product', [ProductController::class, 'storeProduct'])->name('add-product');

Route::post('login', [UserController::class, 'login'])->name('login');
Route::get('/login',[UserController::class,'loginForm']);