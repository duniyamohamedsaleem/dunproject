<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
|
*/

// Route::get('cake', function () {
//     return view('cakehouse');
// });
Route::view('/','cakehouse')->name('cake');
Route::view('add','address')->name('add');
Route::view('hi','welcome')->name('hi');
Route::view('flav','flavours')->name('flav');