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

Route::get('/', function () {
    // return view('welcome');
    return view('index');
});

Route::get('qiz', function () {
    return view('qiz');
});

Route::get('rule', function () {
    return view('rule');
});

Route::get('products', function () {
    return view('products');
});

Route::get('result0', function () {
    return view('result0');
});

Route::get('result1', function () {
    return view('result1');
});

Route::get('result2', function () {
    return view('result2');
});

Route::get('result3', function () {
    return view('result3');
});


Route::get('console', [UserController::class, 'index'])->name('admin');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
// Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('login', [UserController::class, 'verify'])->name('verify');

Route::group(['prefix' => 'console', 'middleware' => ['web', 'check.login']], function () {
    Route::get('dashboard', [DataController::class, 'dashboard'])->name('dashboard');
    Route::get('userInfo', [DataController::class, 'info'])->name('userInfo');
});
