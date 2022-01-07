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

Route::get('/result0', function () {
    return view('result0');
});

Route::get('/result1', function () {
    return view('result1');
});

Route::get('/result2', function () {
    return view('result2');
});

Route::get('/result3', function () {
    return view('result3');
});
