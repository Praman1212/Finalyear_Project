<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
// use App\Models\auth;
use Illuminate\Support\Facades\Auth;

// User Route
Route::get('/',[ProductController::class,'index'])->name('home');

// Auth Routes

Route::get('/login',[AuthController::class,'login'])->name('login-user');

Route::get('/register',[AuthController::class,'register'])->name('register-user');

Route::post('/saveUser',[AuthController::class,'saveUser'])->name('save-User');

Route::post('/getUser',[AuthController::class,'getUser'])->name('get-User');

Route::get('/product-details',[ProductController::class,'product_details']);

Route::get('/checkout',[ProductController::class,'checkout']);

Auth::routes();

// Admin Routes
Route::get('/admin/index',[AdminController::class,'index'])->name('home-index');

// Admin View Products
Route::get('/admin/productcrud',[AdminController::class,'viewProducts'])->name('product-crud');

// Fetching data from saveProduct model to home page
Route::get('shoesfetch',[HomeController::class,'userProduct'])->name('shoes-fetch');


// Add Products

Route::get('/admin/productForm',[App\Http\Controllers\AdminController::class,'productForm'])->name('productForm');

Route::post('/saveProduct',[App\Http\Controllers\AdminController::class,'saveProducts'])->name('saveProducts');

// Add Category

Route::get('/admin/categoryForm',[App\Http\Controllers\AdminController::class,'categoryForm'])->name('categoryForm');
Route::post('/saveCategory',[AdminController::class,'saveCategory'])->name('saveCategory');

Route::get('/admin/categorycrud',[AdminController::class,'viewCategory'])->name('view-category');
// Edit of view products
Route::get('/edit',[AdminController::class],'Edit')->name('edit');

Route::post('/delete/{id}','App\Http\Controllers\AdminController@destroyProduct');


