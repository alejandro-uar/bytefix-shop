<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;




Route::get('/new-product', [ProductController::class, 'index'])->name('product');
Route::post('/new-product', [ProductController::class, 'create']);

Route::get('/new-category', [CategoryController::class, 'index'])->name('category');
Route::post('/new-category', [CategoryController::class, 'register']);

Route::get('/all-products', function () {
    return view('views_products.all_products');
})->name('all');    

//Filtros
Route::get('/', [ProductController::class, 'all'])->name('index');
Route::get('/laptos', [ProductController::class, 'getLaptos'])->name('laptos');
Route::get('/Mouses', [ProductController::class, 'getMouses'])->name('mouses');
Route::get('/keyboards', [ProductController::class, 'getKeyboards'])->name('keyboards');