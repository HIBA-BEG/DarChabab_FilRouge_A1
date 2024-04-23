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


Route::get('/', function () {
    return view('home');
});

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login');
Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register');

Route::middleware('auth')->group(function () {

    Route::post('logout', [LoginController::class, 'destroy'])->name('logout');

    // Route::get('HomeAssociation', [AssociationController::class, 'index'])->name('association.home');
    Route::get('HomeAdmin', [AdminController::class, 'index'])->name('admin.home')->middleware(['admin']);
    Route::get('ToutesLesAssociations', [AdminController::class, 'allAssociations'])->name('Associations')->middleware(['admin']);
    Route::get('ConfirmationComptes', [AdminController::class, 'allAccounts'])->name('confirmAccount')->middleware(['admin']);
    Route::patch('/updateCompte/{id}', [AdminController::class, 'updateConfirmed'])->name('updateConfirmed')->middleware(['admin']);

    Route::get('ToutesLesSallesA', [SalleController::class, 'createSalle'])->name('admin.salles')->middleware(['admin']);
    Route::post('Salles', [SalleController::class, 'create'])->name('addSalle')->middleware(['admin']);
    Route::put('Salle/{id}', [SalleController::class, 'update'])->name('updateSalle')->middleware(['admin']);
    Route::delete('/Salles/{salle}', [SalleController::class, 'delete'])->name('deleteSalle')->middleware(['admin']);

    Route::delete('/Salles', [SalleController::class, 'reserve'])->name('reserveSalle')->middleware(['association']);

    Route::get('ToutesLesSalles', [SalleController::class, 'allSalles'])->name('association.home')->middleware(['association']);

    Route::get('MesActivites', [AssociationController::class, 'activites'])->name('mesActivites')->middleware(['association']);

    Route::get('/reservations', [ReservationController::class, 'createReservation'])->name('reservations')->middleware(['association']);
    Route::post('/reservations', [ReservationController::class, 'store'])->name('addReservation')->middleware(['association']);


    Route::get('/profileAssociation', [ProfileController::class, 'edit'])->name('profile.editAssociation')->middleware('Association')->middleware(['association']);
    Route::get('/CompleteprofileAssociation', [ProfileController::class, 'storeAssociationView'])->name('profile.CompleteAssociation')->middleware(['association']);
    Route::post('/CompleteprofileAssociation', [ProfileController::class, 'storeAssociation'])->name('profile.storeAssociation')->middleware(['association']);
    Route::get('/ShowProfileAssociation', [ProfileController::class, 'ShowProfileAssociation'])->name('profile.ShowProfileAssociation')->middleware(['association']);
    Route::put('/associations/{association}', [AssociationController::class, 'updateAssociation'])->name('associations.update');


    Route::get('/ShowProfileAdmin', [ProfileController::class, 'ShowProfileAdmin'])->name('profile.ShowProfileAdmin')->middleware(['admin']);
});

