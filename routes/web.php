<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/personal', [App\Http\Controllers\EmployeeController::class, 'personal'])->name('personal');
Route::get('/home/timesheet', [App\Http\Controllers\EmployeeController::class, 'timesheet'])->name('timesheet');
Route::get('/home/daily', [App\Http\Controllers\EmployeeController::class, 'daily'])->name('daily');
Route::get('/home/leaveledger', [App\Http\Controllers\EmployeeController::class, 'leaveledger'])->name('leaveledger');
Route::get('/home/announcement', [App\Http\Controllers\EmployeeController::class, 'announcement'])->name('announcement');
Route::get('/home/update', [App\Http\Controllers\EmployeeController::class, 'update'])->name('update');


Route::get('login', [App\Http\Controllers\CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [App\Http\Controllers\CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [App\Http\Controllers\CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [App\Http\Controllers\CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [App\Http\Controllers\CustomAuthController::class, 'signOut'])->name('signout');
