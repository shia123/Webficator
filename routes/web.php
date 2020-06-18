<?php

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

use App\Http\Controllers\WebContentController;
use App\WebContent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage.home');
});

Route::get('/activity','Activity@output');
Route::post('/activity','Activity@output');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'webcontent'], function () {
   
    Route::get('home','WebContentController@WebContent');
    Route::post('checkUser','HomeController@checkUser');
    Route::post('sendMail','HomeController@sendMail');
  
    
});

Route::group(['prefix' => 'Owner'], function () {
   
    Route::get('dashboard','OwnerController@dashBoard');
    Route::get('logout','OwnerController@logout');
    
  
    
});

Route::group(['prefix' => 'Secretary'], function () {
   
    Route::get('dashboard','SecretaryController@dashBoard');
    Route::get('logout','SecretaryController@logout');
    
  
    
});

Route::group(['prefix' => 'Driver'], function () {
   
    Route::get('dashboard','DriverController@dashBoard');
    
  
    
});
