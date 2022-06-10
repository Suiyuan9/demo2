<?php

use App\Http\Controllers\DrawDateController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TotoSiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResultApiController;
use App\Http\Controllers\Result4DController;


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
Route::group(['middleware'=>['auth']], function(){
Route::resource('employee', EmployeeController::class);
Route::resource('user', UserController::class);
Route::resource('result_api',ResultApiController::class);
Route::resource('drawdate',DrawDateController::class);
Route::resource('totoSite',TotoSiteController::class);
Route::resource('result',Result4DController::class);




Route::controller(HomeController::class)->group(function(){
    
    Route::get('/index3','index3')->name('index3');
    Route::get('/home','index')->name('home');

});
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});