<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Front\HomeController;
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

Route::get('/',[HomeController::class,'index'])->name('home');



//   Route::get('/dash',function(){
//     return view('dashboard');})->middleware(['auth','verified']);
require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';

//Route::get('/dashboard',[DashboardController::class,'index']);
//Route::get('/dashboard','App\Http\Controllers\DashboardController@index');
