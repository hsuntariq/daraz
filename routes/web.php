<?php

use App\Http\Controllers\categoryController;
use Illuminate\Support\Facades\Route;



// user routes

Route::view('/','welcome');



// seller routes

Route::view('/seller-dashboard','pages.seller.dashboard');
Route::view('/seller-add-category','pages.seller.add-category');

Route::post('/add-category',[categoryController::class,'addCategory']);




