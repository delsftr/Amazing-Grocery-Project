<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QueryException;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;

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

Route::get('/',[HomeController::class,'welcome'])->name('welcome');


Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login.action');
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/register',[LoginController::class,'register_action'])->name('register.action');

Route::group(['middleware' => ["UserLogin"]], function () {
    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::get('/profile',[HomeController::class,'profile'])->name('profile');
    Route::post('/profile',[HomeController::class,'profile_update'])->name('profile.update');
    Route::get('/detail/{id}',[HomeController::class,'detail'])->name('detail');
    Route::get('/buy/{id}',[HomeController::class,'buy'])->name('buy');
    Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout');
    Route::get('/cart',[HomeController::class,'cart'])->name('cart');
    Route::get('/cart/{id}',[HomeController::class,'cart_delete'])->name('cart.delete');
    Route::get('/notification',[HomeController::class,'notification'])->name('notification');
});
Route::group(['middleware' => ["Admin"]], function () {
    Route::get('/account',[AccountController::class,'index'])->name('account');
    Route::get('/account/edit/{id}',[AccountController::class,'edit'])->name('account.edit');
    Route::post('/account/update/{id}',[AccountController::class,'update'])->name('account.update');
    Route::get('/account/delete/{id}',[AccountController::class,'delete'])->name('account.delete');
});
