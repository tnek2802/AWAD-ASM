<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

//START shopping and products section
Route::get('/shoppingPage', function () {
    return view('shoppingPage');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/success', function () {
    return view('loginSuccess');
});

Route::get('/MenShoes', function () {
    return view('MenShoes');
});

Route::get('/WomenShoes', function () {
    return view('WomenShoes');
});

Route::get('/MenClothes', function () {
    return view('MenClothes');
});

Route::get('/WomenClothes', function () {
    return view('WomenClothes');
});
//END shopping and products section

Route::get("/profile" , [UserController::class, 'preLoads']);
Route::get("/addressbook" , [UserController::class, 'profile.addressbook']);


// START authentication section
Auth::routes();

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);

Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm']);

Route::post('/login/admin/user', [LoginController::class, 'adminLogin']);

Route::post('/register/admin', [RegisterController::class, 'createAdmin']);

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});


Route::get('logout', [LoginController::class, 'logout']);
//END authentication section


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
