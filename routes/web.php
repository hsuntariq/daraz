<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;



// user routes

Route::view('/','welcome');
Route::view('/register','pages.register');
Route::view('/login','pages.login');
Route::get('/single-product/{id}',[productController::class,'findProduct']);



// seller routes

Route::view('/seller-dashboard','pages.seller.dashboard');
Route::view('/seller-add-category','pages.seller.add-category');
Route::view('/seller-add-product','pages.seller.add-product');

Route::post('/add-category',[categoryController::class,'addCategory']);
Route::post('/add-product',[productController::class,'addProduct']);
Route::post('/reg',[userController::class,'SignUp']);
Route::post('/login',[userController::class,'SignIn']);
Route::post('/logout',[userController::class,'SignOut']);
Route::post('/cart',[cartController::class,'addToCart']);

Route::get('/',[categoryController::class,'getCategories']);




