<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\productController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/logout', function () {
    Session()->forget('user');
    return redirect('/login');
});
Route::get('login', function () {
    return view('login');
});
Route::post('login', [loginController::class, 'login']);

Route::get('/', [productController::class, 'index']);
Route::get('detail/{id}', [productController::class, 'detail']);
Route::get('search', [productController::class, 'search']);
Route::post('add_to_cart', [productController::class, 'AddToCart']);
Route::get('cartlist', [productController::class, 'cartlist']);
Route::get('removeCart/{ids}', [productController::class, 'removeCart']);
Route::get('order', [productController::class, 'orderNow']);
