<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [KamarController::class, 'home']);

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', function () {
    return view('register');
});

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/admin', [KamarController::class, 'index']);

// ---> Route Resepsionis
Route::get('/resepsionis', [BookingController::class, 'index']);
Route::post('/resepsionis/search', [BookingController::class, 'search'])->name('resepsionis.search');


// ---> Route Booking
Route::post('/booking', [BookingController::class, 'store'])->name('store.booking');
Route::get('/booking/detail', [BookingController::class, 'detail'])->name('booking.detail');


// ---> Route Page Kamar
Route::get('/create', [KamarController::class, 'create'])->name('kamar.create');
Route::post('/create/kamar', [KamarController::class, 'store']);
Route::get('/kamar/update/{id}', [KamarController::class, 'edit'])->name('kamar.edit');
Route::patch('/kamar/update/{id}', [KamarController::class, 'update'])->name('kamar.update');
Route::delete('/kamar/delete/{id}', [KamarController::class, 'destroy'])->name('kamar.delete');

// ---> Route Page Fasilitas
Route::get('/creates', [FasilitasController::class, 'create'])->name('fasilitas.creates');
Route::post('/creates/fasilitas', [FasilitasController::class, 'store']);
Route::get('/fasilitas/update/{id}', [FasilitasController::class, 'edits'])->name('fasilitas.edit');
Route::patch('/fasilitas/update/{id}', [FasilitasController::class, 'updates'])->name('fasilitas.update');
Route::delete('/fasilitas/delete/{id}', [FasilitasController::class, 'destroys'])->name('fasilitas.delete');
