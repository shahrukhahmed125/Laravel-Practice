<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

/// Routes for layouts Laravel

Route::get('/',function(){
    return view('welcome');
});


/// Routes for CRUD Operation Laravel

Route::get('/products',[ProductController::class,'index'])->name('crud');

Route::get('/products/create',[ProductController::class,'create']);

Route::post('/products',[ProductController::class,'store']);

Route::get('/show',[ProductController::class,'show']);

Route::get('/show/edit/{id}',[ProductController::class,'edit']);

Route::post('/show/update/{id}',[ProductController::class,'update'])->name('product.update');

Route::get('/show/{product}',[ProductController::class,'destroy']);