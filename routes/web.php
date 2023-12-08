<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;




Route::get('/', [PetController::class, "index"]);
Route::get("/catalog", [ProductController::class, 'catalog']);
Route::get("/product_sale{id}", [ProductController::class, 'product_sale']);
// Регистрация
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/signup', [UserController::class, 'signup'])->name('signup');

// Аутентификация
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/signin', [UserController::class, 'signin'])->name('signin');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Аккаунт
Route::get('/account', [App\Http\Controllers\UserController::class, 'account'])->name('account')->middleware('auth');
// Аккаунт - обо мне
Route::get('/accountUser', [App\Http\Controllers\UserController::class, 'accountUser'])->name('accountUser')->middleware('auth');
Route::post('/accountUserUpdate', [App\Http\Controllers\UserController::class, 'accountUserUpdate'])->name('accountUserUpdate');


// Админ
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/create_products', [App\Http\Controllers\AdminController::class, 'create_products'])->name('create_products');
Route::get('/products', [App\Http\Controllers\AdminController::class, 'products'])->name('products');
Route::get('/edit_products/{product}', [App\Http\Controllers\AdminController::class, 'edit_products'])->name('edit_products');
//Деятельность администратора
Route::post('/create_product', [App\Http\Controllers\ProductController::class, 'create_product'])->name('create_product');
Route::post('/edit_product', [App\Http\Controllers\ProductController::class, 'edit_product'])->name('edit_product');

Route::delete('/delete_product/{product}', [App\Http\Controllers\ProductController::class, 'delete_product'])->name('delete_product');

// Продукт

