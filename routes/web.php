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

Route::get('login', function () {
    return view('login');
});
Route::post('login', [loginController::class, 'login']);

Route::get('/', [productController::class, 'index']);
Route::get('detail/{id}', [productController::class, 'detail']);
Route::get('search', [productController::class, 'search']);
