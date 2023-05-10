<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DeliverController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\Home;
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
// Base

Route::get('/', [Home::class, '__invoke']);

// Category
Route::post('/category', [CategoryController::class, 'create']);
Route::post('/updatecategory', [CategoryController::class, 'update']);
Route::post('/deletecategory', [CategoryController::class, 'destroy']);

// Deliver
Route::post('/deliver', [DeliverController::class, 'create']);
Route::post('/updatedeliver', [DeliverController::class, 'update']);
Route::post('/deletedeliver', [DeliverController::class, 'destroy']);

// Client
Route::post('/client', [ClientController::class, 'create']);
Route::post('/updateclient', [ClientController::class, 'update']);
Route::post('/deleteclient', [ClientController::class, 'destroy']);

// Product
Route::post('/product', [ProductController::class, 'create']);
Route::post('/updateproduct', [ProductController::class, 'update']);
Route::post('/deleteproduct', [ProductController::class, 'destroy']);

// Storage
Route::post('/storage', [StorageController::class, 'create']);
Route::post('/updatestorage', [StorageController::class, 'update']);
Route::post('/deletestorage', [StorageController::class, 'destroy']);

// Order
Route::post('/order', [OrderController::class, 'create']);
Route::post('/updateorder', [OrderController::class, 'update']);
Route::post('/deleteorder', [OrderController::class, 'destroy']);
