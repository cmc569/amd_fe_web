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
    // return view('welcome');
    return view('index');
});

Route::get('/qiz', function () {
    return view('qiz');
});

Route::get('/rule', function () {
    return view('rule');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/efficiency', function () {
    return view('result0');
});

Route::get('/planning', function () {
    return view('result1');
});

Route::get('/communication', function () {
    return view('result2');
});

Route::get('/creative', function () {
    return view('result3');
});
