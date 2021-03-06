<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\SouvenirController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutusController;

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

Route::get('admin', [AdminController::class, 'index'])->name('admin');
Route::post('admin', [AdminController::class, 'login'])->name('admin');
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin_logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('CejLoginMiddleware');
Route::get('dashboard/souvenir', [SouvenirController::class, 'adminsouvenir'])->middleware('CejLoginMiddleware');
Route::get('dashboard/souvenir/tambah', [SouvenirController::class, 'create'])->middleware('CejLoginMiddleware');
Route::post('dashboard/souvenir/simpan', [SouvenirController::class, 'add'])->middleware('CejLoginMiddleware');
Route::get('dashboard/souvenir/ubah/{id}', [SouvenirController::class, 'edit'])->middleware('CejLoginMiddleware');
Route::post('dashboard/souvenir/update/{id}', [SouvenirController::class, 'update'])->middleware('CejLoginMiddleware');
Route::get('dashboard/souvenir/hapus/{id}', [SouvenirController::class, 'destroy'])->middleware('CejLoginMiddleware');

Route::get('dashboard/hotel', [HotelController::class, 'adminhotel'])->middleware('CejLoginMiddleware');
Route::get('dashboard/hotel/tambah', [HotelController::class, 'create'])->middleware('CejLoginMiddleware');
Route::post('dashboard/hotel/simpan', [HotelController::class, 'add'])->middleware('CejLoginMiddleware');
Route::get('dashboard/hotel/ubah/{id}', [HotelController::class, 'edit'])->middleware('CejLoginMiddleware');
Route::post('dashboard/hotel/update/{id}', [HotelController::class, 'update'])->middleware('CejLoginMiddleware');
Route::get('dashboard/hotel/hapus/{id}', [HotelController::class, 'destroy'])->middleware('CejLoginMiddleware');

Route::get('dashboard/event', [EventController::class, 'adminevent'])->middleware('CejLoginMiddleware');
Route::get('dashboard/event/tambah', [EventController::class, 'create'])->middleware('CejLoginMiddleware');
Route::post('dashboard/event/simpan', [EventController::class, 'add'])->middleware('CejLoginMiddleware');
Route::get('dashboard/event/ubah/{id}', [EventController::class, 'edit'])->middleware('CejLoginMiddleware');
Route::post('dashboard/event/update/{id}', [EventController::class, 'update'])->middleware('CejLoginMiddleware');
Route::get('dashboard/event/hapus/{id}', [EventController::class, 'destroy'])->middleware('CejLoginMiddleware');


Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/hotel', [HotelController::class, 'index'])->name('hotel');

Route::get('/souvenir', [SouvenirController::class, 'index'])->name('souvenir');

Route::get('/event', [EventController::class, 'index'])->name('event');

Route::get('/tuktuk', [AboutusController::class, 'index2']);

// Route::get('/hotel', 'HotelController@index')->name('hotel');
// Route::get('/souvenir', 'SouvenirController@index')->name('souvenir');
// Route::get('/event', 'EventController@index')->name('event');


Route::post('/hotel/AddComment', 'HotelController@store');
Route::post('/hotel/AddReply', 'HotelController@storeReply');

Route::post('/souvenir/AddComment', 'SouvenirController@store');
Route::post('/souvenir/AddReply', 'SouvenirController@storeReply');

Route::post('/event/AddComment', 'EventController@store');
Route::post('/event/AddReply', 'EventController@storeReply');

Route::get('auth/google',[App\Http\Controllers\GoogleController::class,'redirectToGoogle'])->name('google.login');

Route::get('/aboutus', function () {
    return view('/aboutus');
});

