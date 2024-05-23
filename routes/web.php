<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;



// user routes

Route::view('/','welcome');
Route::get('/single-product/{id}',[productController::class,'findProduct']);



// seller routes

Route::view('/seller-dashboard','pages.seller.dashboard');
Route::view('/seller-add-category','pages.seller.add-category');
Route::view('/seller-add-product','pages.seller.add-product');

Route::post('/add-category',[categoryController::class,'addCategory']);
Route::post('/add-product',[productController::class,'addProduct']);


Route::get('/',[categoryController::class,'getCategories']);




