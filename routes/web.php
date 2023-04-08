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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/adminLogin', function () {
    return view('adminLogin');
});

//later u have to add the authentication measures la for nw i just make the ui and functions
Route::get('/adminPanel', function () {
    return view('adminPanel');
});

Route::view('/shoppingPage',"shoppingPage");
