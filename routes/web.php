<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\SouvenirController;
use App\Http\Controllers\EventController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/hotel', [HotelController::class, 'index'])->name('hotel');

Route::get('/souvenir', [SouvenirController::class, 'index'])->name('souvenir');

Route::get('/event', [EventController::class, 'index'])->name('event');

// Route::get('/hotel', 'HotelController@index')->name('hotel');
// Route::get('/souvenir', 'SouvenirController@index')->name('souvenir');
// Route::get('/event', 'EventController@index')->name('event');


Route::post('hotel/AddComment', 'HotelController@store');
Route::post('hotel/AddReply', 'HotelController@storeReply');

Route::post('souvenir/AddComment', 'SouvenirController@store');
Route::post('souvenir/AddReply', 'SouvenirController@storeReply');

Route::post('event/AddComment', 'EventController@store');
Route::post('event/AddReply', 'EventController@storeReply');
