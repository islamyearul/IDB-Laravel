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

// Route::get('/', function () {
//     return view('pages/index');
// });
Route::get('/', 'PagesController@index');

// Admin Panrl Routes
Route::get('/admin/dashboard', 'AdminDashboardController@index');

Route::get('/admin/main', 'MainController@index');
Route::Post('/admin/main/add-data', 'MainController@store');
Route::get('/admin/main/delete-data/{id}', 'MainController@destroy');
Route::get('/admin/main/edit-data/{id}', 'MainController@edit');



Route::get('/admin/about', 'AdminDashboardController@about');
Route::get('/admin/contact', 'AdminDashboardController@contact');

// Servise
Route::resource('/admin/service', 'ServiceController');
Route::Post('/admin/service/add-data', 'ServiceController@store');
Route::get('/admin/service/edit-data/{id}', 'ServiceController@edit');
Route::post('/admin/service/update-data', 'ServiceController@update');
Route::get('/admin/service/delete-data/{id}', 'ServiceController@destroy');



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
