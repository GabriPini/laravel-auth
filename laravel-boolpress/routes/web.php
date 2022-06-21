<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function(){
    //admin dashboard
    Route::get('/', 'HomeController@index')->name('dashboard');//admin.dashboard


});



//DEVE ESSERE L'ULTIMA ROTTA
Route::get("{any?}", function(){
    return view('guest.home');
})->where("any",".*");
