<?php

use App\Http\Controllers\User\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\ContactController;

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

Route::get('login', [LoginController::class, 'showLoginForm'])->name('web.login');
Route::post('login', [LoginController::class, 'login'])->name('user.login');
Route::get('register', [LoginController::class, 'registerForm'])->name('user.register.form');
Route::post('register', [LoginController::class, 'register'])->name('user.register');

Route::middleware('clientChech')->group(function () {
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('real-estates', [IndexController::class, 'realEstates'])->name('user.real-estates');
Route::get('realestatesByCountry/{country_id}', [IndexController::class, 'realestatesByCountry'])->name('user.realestates.by.country');
Route::get('real-estates/details/{realEstate_id}', [IndexController::class, 'realEstateDetails'])->name('user.real-estates.details');
Route::post('contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
});
//Route::get('/properties', [IndexController::class, 'showProperties']);
