<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//	Returns all the merchandise data in alphabetical order according to brand
Route::get('/merchandises', [MerchandiseController::class, 'index']);

//	Returns all the supplier data in alphabetical order according to company_name
Route::get('/suppliers', [SupplierController::class, 'index']);

//  Returns a single merchandise as represented by the merchandise parameter
Route::get('/merchandises/{merchandise}', [MerchandiseController::class, 'view']);

//  Returns all the customers data in alphabetical order according to the name
Route::get('/customers', [CustomerController::class, 'index']);

//  Returns a single customer record with all the sales record relating the customer. 
//  The customer is identified by the customer parameter
Route::get('/customers/{customer}', [CustomerController::class, 'view']);