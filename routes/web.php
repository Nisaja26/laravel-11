<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route resource for products
// route dengan path products dan arahkan ke dalam class productcontroller
Route::resource('/products', \App\Http\Controllers\ProductController::class);