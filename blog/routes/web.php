<?php

use Aws\Middleware;
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
//     return view('welcome');
// });


Route::resource('/list','ListController');
Route::get('/','WelcomeController@index');
Route::get('/home','WelcomeController@home');


Route::get('/about','WelcomeController@about');


Route::get('/student',[
    'uses' => 'WelcomeController@aboutstudent',
    'middleware' => 'checkage'
]);