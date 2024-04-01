<?php

use App\Http\Middleware\Association;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('home');
});

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('loginU', [LoginController::class, 'store'])->name('login');
Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('registerU', [RegisterController::class, 'store'])->name('register');
// ->middleware(['auth', 'admin'])


Route::get('HomeAssociation', [AssociationController::class, 'index'])->name('Association.home');