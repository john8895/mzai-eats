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

// home
Route::get('/', function () {
    return view('views/index/index');
})->name("home");


// groupbuy
Route::get('/groupbuy', function () {
    return view('views/groupbuy/index');
})->name("groupbuy");


// order
Route::get('/order', function () {
    return view('views/order/index');
})->name("order");


// groupbuy-list
Route::get('/groupbuy-list', function () {
    return view('views/groupbuy/list');
})->name("groupbuy-list");


// store-list
Route::get('/store-list', function () {
    return view('views/store/list');
})->name("store-list");


// store-list
Route::get('/history-list', function () {
    return view('views/history/list');
})->name("history-list");
