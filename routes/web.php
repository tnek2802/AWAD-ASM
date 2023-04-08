<?php

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
// Route::get('/home', function () {
//     return view('home');
// });
//having many home home is not really good la supposedly so try to clean up abit
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

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);

Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm']);

Route::post('/login/admin', [LoginController::class, 'adminLogin']);

Route::post('/register/admin', [RegisterController::class, 'createAdmin']);

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});


Route::get('logout', [LoginController::class, 'logout']);
//END authentication section


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

