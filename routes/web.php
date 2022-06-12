<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// use App\Models\Registers;
// use Illuminate\Support\Facades\Auth;

// User Route
Route::get('/',[ProductController::class,'index']);

Route::get('/login',[ProductController::class,'login'])->name('login');

Route::post('/saveUser',[ProductController::class,'saveUser'])->name('saveUser');

Route::get('/product-details',[ProductController::class,'product_details']);

Route::get('/checkout',[ProductController::class,'checkout']);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes
Route::get('/admin/index',[AdminController::class,'index']);

// Admin View Products
Route::get('/admin/details/viewProducts',[AdminController::class,'viewProducts'])->name('viewProducts');

// Add Products

Route::get('/admin/productForm',[App\Http\Controllers\AdminController::class,'productForm'])->name('productForm');

Route::post('/saveProduct',[App\Http\Controllers\AdminController::class,'saveProducts'])->name('saveProducts');

// Edit of view products
Route::get('edit',[AdminController::class],'Edit')->name('edit');
Route::get('delete',[AdminController::class],'Delete')->name('delete');

// View Products
// Route::get('/admin')
 
// Admin Category
Route::get('/admin/category/manageCategory','App\Http\Controllers\AdminController@manageCategory')->name('category/manageCategory');

