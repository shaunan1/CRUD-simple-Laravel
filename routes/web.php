<?php
  
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('auth.login');
});

  
Auth::routes();

Route::get('/cetak',[ProductController::class,"cetak"]);

Route::get('cetak', [ProductController::class, 'cetak'])->name('cetak');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  
Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('customers', CustomerController::class);
Route::resource('orders', OrderController::class);
Route::resource('dashboard', DashboardController::class);


