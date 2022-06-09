<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('index');
// });

// User Route
Route::get('/',[ProductController::class,'index']);

Route::get('/login',[ProductController::class,'login']);

Route::get('/product-details',[ProductController::class,'product_details']);

Route::get('/checkout',[ProductController::class,'checkout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes
Route::get('/admin/index',[AdminController::class,'index']);

Route::get('/admin/productForm',[App\Http\Controllers\AdminController::class,'productForm']);
 
// Admin Category
Route::get('/admin/category/manageCategory','App\Http\Controllers\AdminController@manageCategory');