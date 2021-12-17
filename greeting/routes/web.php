<?php

use App\Http\Controllers\CustomerController;
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
Route::prefix('customers')->group(function() {
    Route::get('/',[CustomerController::class,"showList"])->name("customers");
    Route::get('/{id}/delete',[CustomerController::class,"deleteCustomer"])->name("customers.delete");
    Route::get('/formCreate',[CustomerController::class,"showFormCreate"])->name("customers.create");
    Route::post('/',[CustomerController::class,"createNewCustomer"])->middleware('checkEmail');
    Route::get('/{id}/detail',[CustomerController::class,"detail"])->name("customers.detail");
    Route::get('/{id}/formUpdate',[CustomerController::class,"showFormUpdate"])->name("customers.update");
    Route::post('/update',[CustomerController::class,"updateCustomer"])->name("customer.update-ne");
});

