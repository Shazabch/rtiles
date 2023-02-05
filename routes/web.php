<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::match(['get','post'],'/vendors',[VendorController::class,'index'])->name('vendors');
    Route::match(['get','post'],'/sizes',[SizeController::class,'index'])->name('sizes');
    Route::match(['get','post'],'/purchases',[PurchaseController::class,'index'])->name('purchases');
    Route::match(['get','post'],'/sales',[SaleController::class,'index'])->name('sales');
    Route::match(['get','post'],'/customers',[CustomerController::class,'index'])->name('customers');
    
    Route::post('/save/customer',[CustomerController::class,'store'])->name('customer.store');
    Route::post('/save/vendor',[VendorController::class,'store'])->name('vendor.store');
    Route::post('/save/sale',[SaleController::class,'store'])->name('sales.store');
    Route::post('/save/size',[SizeController::class,'store'])->name('size.store');
    Route::post('/save/purchase',[PurchaseController::class,'store'])->name('purchases.store');
    
    Route::get('/sale/edit/{id}',[SaleController::class,'edit'])->name('sales.edit');
    Route::get('/sale/receipt/{id}',[SaleController::class,'show'])->name('sales.receipt');
    
    Route::get('/purchase/show/{id}',[PurchaseController::class,'show'])->name('purchases.show');
    Route::get('/purchase/edit/{id}',[PurchaseController::class,'edit'])->name('purchases.edit');
});