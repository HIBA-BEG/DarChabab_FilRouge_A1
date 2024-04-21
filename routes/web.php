<?php

use App\Http\Middleware\Association;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ReservationController;
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
Route::post('login', [LoginController::class, 'store'])->name('login');
Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register');
Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
// ->middleware(['auth', 'admin'])


// Route::get('HomeAssociation', [AssociationController::class, 'index'])->name('association.home');
Route::get('HomeAdmin', [AdminController::class, 'index'])->name('admin.home');
Route::get('ToutesLesAssociations', [AdminController::class, 'allAssociations'])->name('Associations');
Route::get('ConfirmationComptes', [AdminController::class, 'allAccounts'])->name('confirmAccount');
Route::patch('/updateCompte/{id}', [AdminController::class, 'updateConfirmed'])->name('updateConfirmed');


Route::get('ToutesLesSallesA', [SalleController::class, 'createSalle'])->name('admin.salles');
Route::post('Salles', [SalleController::class, 'create'])->name('addSalle');
Route::put('Salle/{id}', [SalleController::class, 'update'])->name('updateSalle');
Route::delete('/Salles/{salle}', [SalleController::class, 'delete'])->name('deleteSalle');
Route::delete('/Salles', [SalleController::class, 'reserve'])->name('reserveSalle');

Route::get('ToutesLesSalles', [SalleController::class, 'allSalles'])->name('association.home');
// middleware(['auth', 'admin'])->

Route::get('MesActivites', [AssociationController::class, 'activites'])->name('mesActivites');

Route::get('/reservations', [ReservationController::class, 'createReservation'])->name('reservations');
Route::post('/reservations', [ReservationController::class, 'store'])->name('addReservation');

Route::middleware('auth')->group(function () {

    //Association

    Route::get('/profileAssociation', [ProfileController::class, 'edit'])->name('profile.editAssociation');
    Route::get('/CompleteprofileAssociation', [ProfileController::class, 'storeAssociationView'])->name('profile.CompleteAssociation');
    Route::post('/CompleteprofileAssociation', [ProfileController::class, 'storeAssociation'])->name('profile.storeAssociation');
    Route::get('/ShowProfileAssociation', [ProfileController::class, 'ShowProfileAssociation'])->name('profile.ShowProfileAssociation');

    //admin
    Route::get('/ShowProfileAdmin', [ProfileController::class, 'ShowProfileAdmin'])->name('profile.ShowProfileAdmin');
});
