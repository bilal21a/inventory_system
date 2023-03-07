<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',function () {return view('auth.login');});
Route::get('/customer',[CustomerController::class, 'customer'])->name('customer');
Route::get('/customer/add_customer',[CustomerController::class, 'add_customer'])->name('add_customer');
Route::get('/customer/edit_customer',[CustomerController::class, 'edit_customer'])->name('edit_customer');
Route::get('/product',[ProductsController::class, 'product'])->name('product');
Route::get('/user_management',[UserController::class, 'user_management'])->name('user_management');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
