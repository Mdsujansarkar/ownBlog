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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'UserController@index');
Route::get('/contact', 'UserController@contact');
Route::get('/about', 'UserController@about');

//Admin panel
Route::get('/admin', 'AdminController@index');
Route::post('/dashboard', 'AdminController@adminLogin');
Route::get('/dashboard', 'AdminController@adminLogins');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
