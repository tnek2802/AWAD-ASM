<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

//START shopping and products section
Route::get('/shoppingPage', function () {
    return view('shoppingPage');
});
Route::get('/', function () {
    return view('home');
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




// START authentication section
Auth::routes();

Route::get('/login/user', [LoginController::class, 'showUserLoginForm']);
Route::post('/login/user', [LoginController::class, 'userLogin']);

Route::group(['middleware' => 'auth:user'], function () {
    Route::view('/user', 'loginSuccess');
});

// Route::group(['middleware' => 'auth:admin'], function () {
//     Route::view('/admin', 'admin');
// });

Route::get('logout', [LoginController::class, 'logout']);
//END authentication section


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

