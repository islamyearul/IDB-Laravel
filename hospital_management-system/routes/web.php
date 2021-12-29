<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontIndexController;
use App\Http\Controllers\AdminController;

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
// Route::get('/', function () {
//     return view('frontend.index');
// });

// Frontend Routes
Route::get('/', [FrontIndexController::class, 'index']);










// Backend Routes
Route::get('/admin', [AdminController::class, 'index']);




