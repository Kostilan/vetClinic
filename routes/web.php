<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;



Route::get('/', function() { return view('index'); });
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
Route::get('/account', [UserController::class, 'account'])->name('account')->middleware('auth');
// Аккаунт - обо мне
Route::get('/accountUser', [UserController::class, 'accountUser'])->name('accountUser')->middleware('auth');
Route::post('/accountUserUpdate', [UserController::class, 'accountUserUpdate'])->name('accountUserUpdate');
Route::get('/pet', [UserController::class, 'pet'])->name('pet');


// Админ
Route::get('/admin', function() { return view('index'); } )->name('admin')->middleware('auth');
Route::get('/create_products', [AdminController::class, 'create_products'])->name('create_products');
Route::get('/products', [AdminController::class, 'products'])->name('products');
Route::get('/edit_products/{product}', [AdminController::class, 'edit_products'])->name('edit_products');
//Деятельность администратора
Route::post('/create_product', [ProductController::class, 'create_product'])->name('create_product');
Route::post('/edit_product', [ProductController::class, 'edit_product'])->name('edit_product');

Route::delete('/delete_product/{product}', [App\Http\Controllers\ProductController::class, 'delete_product'])->name('delete_product');

// Корзина
Route::get('/basket', [App\Http\Controllers\ProductController::class,'basket']);
