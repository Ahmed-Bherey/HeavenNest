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

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::middleware('auth')->group(function () {
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::post('contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
});
//Route::get('/properties', [IndexController::class, 'showProperties']);
