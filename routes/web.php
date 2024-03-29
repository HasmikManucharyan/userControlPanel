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


Auth::routes();
Route::get('/home','HomeController@index')->name('ajax.pagination');

Route::get('/', function () {
   if(Auth::check()){return Redirect::to('home');}
    return view('welcome');
});

Route::get('/getLocations', 'GetDataController@locations');
Route::get('/getAges', 'GetDataController@ages');