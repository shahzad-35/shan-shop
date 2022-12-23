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

Route::get('/', function () {
    return view('home');
});

Route::get('/products', [ProductController::class, 'getProducts'])->name('all-products');
Route::post('add/product', [ProductController::class, 'storeProduct'])->middleware('auth')->name('add-product');

Route::get('/categories', [CategoryController::class, 'getAllCategories'])->name('all-categories');
Route::post('add/category', [CategoryController::class, 'storeCtaegory'])->middleware('auth')->name('add-category');

Route::post('login', [UserController::class, 'login']);
