<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('search', [ProductController::class, 'search'])->name('search');
Route::post('/add-to-cart/{product}', [CartController::class, 'add_to_cart'])->name('add-to-cart');
