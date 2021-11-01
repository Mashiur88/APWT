<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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
    return view('welcome');
});

Route::get('/home',[productController::class,'homeView'])->name('home');
Route::get('/product/add',[productController::class,'addProduct'])->name('product.add');
Route::post('/product/add',[productController::class,'submitProduct'])->name('product.sub');
Route::get('/product/edit/{id}',[productController::class,'editProduct'])->name('product.edit');
Route::post('/product/edit/{id}',[productController::class,'update'])->name('product.edit');
Route::get('/product/list',[productController::class,'viewProduct'])->name('product.list');
Route::get('/product/delete/{id}',[productController::class,'deleteProduct'])->name('product.delete');
