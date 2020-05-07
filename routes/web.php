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
Route::get('police', 'PoliceController@index')->name('police');
Route::get('police/create', 'PoliceController@create');
Route::post('police/store', 'PoliceController@store')->name('store');
Route::get('police/show','PoliceController@show')->name('show');
Route::put('police/{police}','PoliceController@update')->name('update');
Route::post('police/{police}', 'PoliceController@destroy')->name('delete');
Route::get('police/{police}/edit','PoliceController@edit')->name('edit');

Route::get('site-register', 'SiteAuthController@siteRegister');
Route::post('site-register', 'SiteAuthController@siteRegisterPost');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
