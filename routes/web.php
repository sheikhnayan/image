<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SellerController;

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
Route::get('/seller-login', function () {
    return view('sellerlog');
});
Route::get('/seller-registation', function () {
    return view('sellerreg');
});
Route::prefix('admin')->group(function () {
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
//Cateory Routes Start
Route::middleware(['auth:sanctum', 'verified'])->get('/categories',[CategoryController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/categories/create',[CategoryController::class, 'create']);
Route::middleware(['auth:sanctum', 'verified'])->get('/categories/edit/{id}',[CategoryController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->get('/categories/delete/{id}',[CategoryController::class, 'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->post('/categories/store',[CategoryController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->post('/categories/update/{id}',[CategoryController::class, 'update']);
//Categories Routes End

//Seller Routes Start
Route::middleware(['auth:sanctum', 'verified'])->get('/sellers',[SellerController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/sellers/create',[SellerController::class, 'create']);
Route::middleware(['auth:sanctum', 'verified'])->get('/sellers/edit/{id}',[SellerController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->get('/sellers/delete/{id}',[SellerController::class, 'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->post('/sellers/store',[SellerController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->post('/sellers/update/{id}',[SellerController::class, 'update']);
//Seller Routes End
});
