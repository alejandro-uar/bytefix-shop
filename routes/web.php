<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/* Route of login */
Route::get('/admin/login', function(){
    return view('user.login');
})->name('login');
Route::post('/admin/login', [UserController::class, 'authenticate'])->name('authenticate');

/* Route of register */
Route::get('/admin/register',function(){
    return view('user.register');
})->name('register.view');
Route::post('/admin/register', [UserController::class, 'register'])->name('register');



Route::middleware('auth')->group(function(){
    Route::get('/admin/products', [ProductController::class, 'all'])->name('admin.index');
    Route::get('/admin/inventory', [ProductController::class, 'inventory'])->name('admin.inventory');
    Route::get('/admin/print', [PrintController::class, 'print'])->name('admin.print');
    Route::get('/admin/new-product', [ProductController::class, 'index'])->name('product');
    Route::post('/admin/new-product', [ProductController::class, 'create']);  
    Route::get('/admin/new-category', [CategoryController::class, 'index'])->name('category');
    Route::post('/admin/new-category', [CategoryController::class, 'register']);
    Route::get('/admin/all-products', function () {
        return view('views_products.all_products');
    })->name('all');    
    Route::post('/admin/logout', [UserController::class, 'logout'])->name('logout');
});

//Routers publics and filters
Route::get('/', [ProductController::class, 'all'])->name('index');
Route::get('/laptos', [ProductController::class, 'getLaptos'])->name('laptos');
Route::get('/Mouses', [ProductController::class, 'getMouses'])->name('mouses');
Route::get('/keyboards', [ProductController::class, 'getKeyboards'])->name('keyboards');