<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\PagesController::class, 'index'])->name('home');

Route::get('/shop', [\App\Http\Controllers\ProductController::class, 'index'])->name('shop');
Route::get('/shop/{id}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product');

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [\App\Http\Controllers\CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/delete-to-cart/{id}', [\App\Http\Controllers\CartController::class, 'delete'])->name('delete.from.cart');
Route::post('/update-from-cart/{id}', [\App\Http\Controllers\CartController::class, 'update'])->name('update.from.cart');
