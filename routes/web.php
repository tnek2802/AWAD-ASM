<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\transactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productController;

//START shopping and products section
Route::get('/shoppingPage', function () {
    return view('shoppingPage');
});
// Route::get('/', function () {
//     // return redirect('/home');
//     return view('home');
// }); 

Route::get('/', [HomeController::class, 'index']);

Route::get('/success', function () {
    return view('loginSuccess');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/MenShoes', [productController::class, 'menShoes']);

Route::get('/WomenShoes', [productController::class, 'womenShoes']);

Route::get('/MenClothes', [productController::class, 'menClothes']);

Route::get('/WomenClothes', [productController::class, 'womenClothes']);

//END shopping and products section

// START shopping cart
Route::get('/cart', [cartController::class, 'index'])->name('cart');   
Route::post('/addItem', [cartController::class, 'addItem'])->name('addItem');
Route::post('/deleteItem', [cartController::class, 'deleteItem'])->name('deleteItem');
// END shopping cart

Route::get("/profile" , [UserController::class, 'preLoads']);
Route::get("/addressbook" , [UserController::class, 'profile.addressbook']);

//GET ORDER DETAILS PAGE
Route::get('/orderdetails/{userid}', [transactionController::class,'getOrderDetails']);

// START authentication section
Auth::routes();

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);

Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm']);

Route::post('/login/admin/user', [LoginController::class, 'adminLogin']);

Route::post('/register/admin', [RegisterController::class, 'createAdmin']);

// Route::group(['middleware' => 'auth:admin'], function () {
//     Route::view('/admin', 'admin');
// });
// Admin Section
Route::get('/admin', [productController::class, 'adminProductList']);

// Route::get('/addProduct', [productController::class, 'addProduct']);

Route::view("addProduct", "addProduct");
Route::post("addProduct",[productController::class, 'addProduct']);
Route::get("deleteProduct/{product_id}", [productController::class,'deleteProduct']);
Route::get("updateProduct/{product_id}", [productController::class,'showProduct']);
Route::post("updateProduct/{product_id}", [productController::class,'updateProduct']);
Route::get('logout', [LoginController::class, 'logout']);
//END authentication section

//Profile
// Profile Page
Route::middleware(['auth'])->group(function () {
    Route::get("/profile", [UserController::class, 'preLoads']);
    Route::post('/profile/edit-detail', [UserController::class, 'editDetail'])->name("editDetail");
    Route::post('/profile/edit-address', [UserController::class, 'editAddress'])->name("editAddress");
    Route::post('/profile/edit-email', [UserController::class, 'editEmail'])->name("editEmail");
    Route::post('/profile/edit-password', [UserController::class, 'editPassword'])->name("editPassword");
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
