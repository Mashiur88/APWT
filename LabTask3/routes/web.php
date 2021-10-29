<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\loginController;
use App\HTTP\Controllers\empController;
use App\HTTP\COntrollers\adminController;

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
//login 
Route::get('/Pages/login',[loginController::class,'loginView'])->name('Pages.login');
Route::post('/Pages/login',[loginController::class,'loginCheck'])->name('Pages.login');
Route::get('/logout',[loginController::class,'Logout'])->name('logout');

//employee
Route::get('/employee/registration',[empController::class,'registrationView'])->name('Pages.Eregistration')->middleware('validAdmin');
Route::post('/employee/registration',[empController::class,'registrationData'])->name('Pages.Eregistration')->middleware('validAdmin');
Route::get('/employee/dash',[empController::class,'enterEdash'])->name('employee.dash')->middleware('validEmployee');
Route::get('/employee/edit/{id}',[empController::class,'editEmp'])->name('employee.edit');
Route::post('/employee/edit',[empController::class,'updateProfile'])->name('employee.edit');
Route::get('/employee/delete/{id}',[empController::class,'deleteProfile'])->name('employee.delete');
Route::get('employee/list',[empController::class,'showemplist'])->name('employee.list')->middleware('validAdmin');
Route::get('employee/profile/{id}',[empController::class,'viewProfile'])->name('employee.profile');

//admin
Route::get('/admin/registration',[adminController::class,'registrationView'])->name('Pages.Aregistration');
Route::post('/admin/registration',[adminController::class,'registrationData'])->name('Pages.Aregistration');
Route::get('/admin/dash',[adminController::class,'enterAdash'])->name('admin.dash');
Route::get('/admin/edit/{id}',[adminController::class,'editAdmin'])->name('admin.edit');
Route::post('/admin/edit',[adminController::class,'updateProfile'])->name('admin.edit');
Route::get('/admin/delete/{id}',[adminController::class,'deleteProfile'])->name('admin.delete');
Route::get('admin/list',[adminController::class,'showadminlist'])->name('admin.list');
Route::get('admin/profile/{id}',[adminController::class,'viewProfile'])->name('admin.profile');