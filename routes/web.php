<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductdetailController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/category/{slug}', [CategoryController::class, 'detail']);

Route::get('/category/electronics/{slug}', [SubcategoryController::class, 'detail']);

Route::get('/category/electronics/tv/{slug}', [ProductdetailController::class, 'detail']);

Route::get('/cart-list/{slug}', [CartController::class, 'list']);

Route::get('/checkout/{slug}', [CheckoutController::class, 'checkout']);
