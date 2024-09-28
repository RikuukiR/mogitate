<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'products'])->name('products.index');

Route::get('/products/{productId}', [ProductController::class, 'show'])->name('products.show');

Route::post('/products/{productId}/update', [ProductController::class, 'update'])->name('products.update');

Route::get('/products/register', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/register', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');

Route::post('/products/{productId}/delete', [ProductController::class, 'destroy'])->name('products.destroy');