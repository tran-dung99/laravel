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

Route::get('/greeting/{name?}',function($name=null){
    if($name) {
        echo "xin chào ".$name."!";
    }else{
        echo" hello word";
    }
}) ;

Route::get('/login',function(){
    return view('login');
});

Route::post('/login',function(Illuminate\Http\Request $request) {
    if($request->userName == "admin" && $request->password == "admin") {
        return view('welcome_admin');
    }else{
        return view('login_error');
    }
});

Route::get('/customers',[\App\Http\Controllers\CustomerController::class,"showList"])->name("customers");
Route::get('/customers/{id}/delete',[\App\Http\Controllers\CustomerController::class,"deleteCustomer"])->name("customers.delete");
Route::get('/customers/formCreate',[\App\Http\Controllers\CustomerController::class,"showFormCreate"])->name("customers.create");
Route::post('/customers',[\App\Http\Controllers\CustomerController::class,"createNewCustomer"]);
Route::get('/customers/{id}/detail',[\App\Http\Controllers\CustomerController::class,"detail"])->name("customers.detail");
Route::get('/customer/{id}/formUpdate',[\App\Http\Controllers\CustomerController::class,"showFormUpdate"])->name("customers.update");
Route::post('/customers/update',[\App\Http\Controllers\CustomerController::class,"updateCustomer"]);
