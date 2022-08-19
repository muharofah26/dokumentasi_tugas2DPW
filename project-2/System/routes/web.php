<?php

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

Route::get('/', function () {
    return view('index');
});


Route::get('category', function () {
    return view('category');
});


Route::get('clients', function () {
    return view('clients');
});


Route::get('contact', function () {
    return view('contact');
});


Route::get('products', function () {
    return view('products');
});


Route::get('welcome', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::get('shopping-bag', function () {
    return view('shopping-bag');
});
