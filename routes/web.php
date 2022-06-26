<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Models\auth;
// use Illuminate\Support\Facades\Auth;

// User Route
Route::get('/',[ProductController::class,'index']);

Route::get('/login',[AuthController::class,'login'])->name('login-user');

Route::get('/register',[AuthController::class,'register'])->name('register-user');

Route::post('/saveUser',[AuthController::class,'saveUser'])->name('save-User');

Route::get('/product-details',[ProductController::class,'product_details']);

Route::get('/checkout',[ProductController::class,'checkout']);

Route::get('/cart',[ProductController::class,'cart']);

Route::get('/contactus',[ProductController::class,'contactus']);


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home-index');

// Admin Routes
Route::get('/admin/index',[AdminController::class,'index'])->name('home-index');

// Admin View Products
Route::get('/admin/productcrud',[AdminController::class,'viewProducts'])->name('product-crud');

// Add Products

Route::get('/admin/productForm',[App\Http\Controllers\AdminController::class,'productForm'])->name('productForm');

Route::post('/saveProduct',[App\Http\Controllers\AdminController::class,'saveProducts'])->name('saveProducts');

// Add Category

Route::get('/admin/categoryForm',[App\Http\Controllers\AdminController::class,'categoryForm'])->name('categoryForm');
Route::post('/saveCategory',[AdminController::class,'saveCategory'])->name('saveCategory');

Route::get('/admin/categorycrud',[AdminController::class,'viewCategory'])->name('view-category');
// Edit of view products
Route::get('edit',[AdminController::class],'Edit')->name('edit');
Route::get('delete/{id}',[AdminController::class],'productDelete')->name('product-delete');

// View Products
// Route::get('/admin')
 
// Admin Category
// Route::get('/admin/category/manageCategory','App\Http\Controllers\AdminController@manageCategory')->name('category/manageCategory');

