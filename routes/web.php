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

use App\Http\Controllers\UserController;
use App\Http\Controllers\DataController;

Route::view('/', 'index');
Route::view('/rule', 'rule');
Route::view('/products', 'products');

Route::get('/qiz/{key?}', function($key=null) {
    return view('qiz', compact('key'));
});

Route::group(['prefix' => '{key}'], function ($key) {
    Route::get('result0', function ($key) {
        return view('result0', compact('key'));
    });

    Route::get('result1', function ($key) {
        return view('result1', compact('key'));
    });

    Route::get('result2', function ($key) {
        return view('result2', compact('key'));
    });

    Route::get('result3', function ($key) {
        return view('result3', compact('key'));
    });
});

Route::group(['prefix' => 'console', 'middleware' => 'web'], function () {
    Route::get('/', [UserController::class, 'index'])->name('admin');

    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('login', [UserController::class, 'verify'])->name('verify');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
    // Route::get('register', [UserController::class, 'register'])->name('register');
    
    Route::group(['middleware' => 'check.login'], function () {
        Route::get('dashboard', [DataController::class, 'dashboard'])->name('dashboard');

        Route::get('userInfo', [DataController::class, 'info'])->name('userInfo');
        Route::post('getUser', [DataController::class, 'getUser'])->name('getUser');
    });
});
