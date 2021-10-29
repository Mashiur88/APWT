<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\loginController;

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
Route::get('/Pages/login',[loginController::class,'loginView'])->name('Pages.login');
Route::post('/Pages/login',[loginController::class,'loginCheck'])->name('Pages.login');
Route::get('/registration',[loginController::class,'registrationView'])->name('Pages.registration');
Route::post('/registration',[loginController::class,'registrationData'])->name('Pages.registration');
Route::get('/contact',[loginController::class,'showContact'])->name('Pages.contact');
Route::post('/contact',[loginController::class,'contactView'])->name('Pages.contact');
