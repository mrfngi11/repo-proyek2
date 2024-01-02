<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController as AboutController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\KamarController as AdminKamarController;
use App\Http\Controllers\Admin\GroomingController as AdminGroomingController;
use App\Http\Controllers\Admin\PesanController as AdminPesanController;
use App\Http\Controllers\Admin\ReservasiController as AdminReservasiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Customer\HomeController as CustomerHomeController;
use App\Http\Controllers\Customer\AboutController as CustomerAboutController;
use App\Http\Controllers\Customer\ServiceController as CustomerServiceController;
use App\Http\Controllers\Customer\GroomingController as CustomerGroomingController;
use App\Http\Controllers\Customer\PetHotelController as CustomerPetHotelController;
use Illuminate\Auth\Events\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/login', [LoginController::class, 'index'])->name('login');

//landing
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
// Route::get('/service', [ServiceController::class, 'index'])->name('service');

//customer
Route::get('/customer-home', [CustomerHomeController::class, 'index'])->name('home-customer');
Route::get('/customer-about', [CustomerAboutController::class, 'index'])->name('about-customer');
Route::get('/customer-service', [CustomerServiceController::class, 'index'])->name('service-customer');
Route::get('/customer-grooming', [CustomerGroomingController::class, 'index'])->name('grooming-customer');
Route::get('/customer-pethotel', [CustomerPetHotelController::class, 'index'])->name('pethotel-customer');


//admin
Route::get('/admin-home', [AdminHomeController::class, 'index'])->name('home-admin');

Route::get('/user', [AdminUserController::class, 'index'])->name('user');
Route::post('/user', [AdminUserController::class, 'store'])->name('user.add');
Route::put('/user/{user}', [AdminUserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}', [AdminUserController::class, 'destroy'])->name('user.destroy');

Route::get('/kamar', [AdminKamarController::class, 'index'])->name('kamar');
Route::post('/kamar', [AdminKamarController::class, 'store'])->name('kamar.add');
Route::put('/kamar/{kamar}', [AdminKamarController::class, 'update'])->name('kamar.update');
Route::delete('/kamar/{kamar}', [AdminKamarController::class, 'destroy'])->name('kamar.destroy');

Route::get('/grooming', [AdminGroomingController::class, 'index'])->name('grooming');
Route::post('/grooming', [AdminGroomingController::class, 'store'])->name('grooming.add');
Route::put('/grooming/{grooming}', [AdminGroomingController::class, 'update'])->name('grooming.update');
Route::delete('/grooming/{grooming}', [AdminGroomingController::class, 'destroy'])->name('grooming.destroy');

Route::get('/pesan', [AdminPesanController::class, 'index'])->name('pesan');
Route::get('/pesan/add', [AdminPesanController::class, 'add'])->name('pesan.add');
Route::post('/pesan', [AdminPesanController::class, 'store'])->name('pesan.store');
Route::put('/pesan/{pesan}', [AdminPesanController::class, 'update'])->name('pesan.update');
Route::delete('/pesan/{pesan}', [AdminPesanController::class, 'destroy'])->name('pesan.destroy');

Route::get('/reservasi', [AdminReservasiController::class, 'index'])->name('reservasi');
Route::get('/reservasi/add', [AdminReservasiController::class, 'add'])->name('reservasi.add');
Route::post('/reservasi', [AdminReservasiController::class, 'store'])->name('reservasi.store');
Route::put('/reservasi/{reservasi}', [AdminReservasiController::class, 'update'])->name('reservasi.update');
Route::delete('/reservasi/{reservasi}', [AdminReservasiController::class, 'destroy'])->name('reservasi.destroy');
