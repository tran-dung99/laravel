<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("products")->group(function() {
    Route::get('/',[\App\Http\Controllers\ProductController::class,"getAll"])->name("product.show");
    Route::get('{id}/delete',[\App\Http\Controllers\ProductController::class,"delete"])->name("product.delete");
    Route::get('/create',[\App\Http\Controllers\ProductController::class,"showFormCreate"])->name("product.create");
    Route::post('/',[\App\Http\Controllers\ProductController::class,"create"])->name("product.add");
    Route::get('{id}/detail',[\App\Http\Controllers\ProductController::class,"detail"])->name("product.detail");
});
