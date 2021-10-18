<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\pageController;

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
Route::get('/welcome',function(){
    return view('welcome');
});

Route::get('/', [pageController::class,'pagecheck'])->name('home');
Route::get('/service', [pageController::class,'pagedata'])->name('service');
Route::get('/teams', [pageController::class,'teamsPage'])->name('teams');
Route::get('/about-us', [pageController::class,'pageInfo'])->name('about');
Route::get('/contact', [pageController::class,'pageContact'])->name('contact');



//Route::get('/page',[pageController::class,'pageCheck']);
