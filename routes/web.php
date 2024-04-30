<?php

use App\Http\Controllers\ArticleBlogController;
use App\Http\Middleware\Association;
use App\Http\Middleware\Banned;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\PasswordOublieController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [ArticleBlogController::class, 'welcome'])->name('home');


Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login');
Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register');
Route::get('forgotMyPassword', [PasswordOublieController::class, 'create'])->name('forgotPassword');
Route::post('forgotMyPassword', [PasswordOublieController::class, 'forgotPassword'])->name('forgotPassword');
Route::get('resetMyPassword/{token}', [PasswordOublieController::class, 'resetPassword'])->name('resetPassword');
Route::post('resetMyPassword/{token}', [PasswordOublieController::class, 'resetPasswordPost'])->name('resetPassword');

Route::middleware(['auth', 'banned'])->group(function () {

    Route::post('logout', [LoginController::class, 'destroy'])->name('logout');

    Route::get('HomeAdmin', [AdminController::class, 'index'])->name('admin.home')->middleware(['admin']);
    Route::get('ToutesLesAssociations', [AdminController::class, 'allAssociations'])->name('Associations')->middleware(['admin']);
    Route::get('ConfirmationComptes', [AdminController::class, 'allAccounts'])->name('confirmAccount')->middleware(['admin']);
    Route::patch('/updateCompte/{id}', [AdminController::class, 'updateConfirmed'])->name('updateConfirmed')->middleware(['admin']);
    
    Route::put('/ban/association/{userId}',  [AdminController::class, 'banAssociation'])->name('ban.association')->middleware(['admin']);
    Route::put('/Unban/association/{userId}',  [AdminController::class, 'unbanAssociation'])->name('unban.association')->middleware(['admin']);
    
    Route::get('ToutesLesAssociationsArchivées', [AdminController::class, 'allArchivedAssociations'])->name('ArchivedAssociations')->middleware(['admin']);
    Route::put('/Archive/association/{userId}',  [AdminController::class, 'ArchiveAssociation'])->name('Archive.association')->middleware(['admin']);
    Route::put('/UnArchive/association/{userId}',  [AdminController::class, 'unArchiveAssociation'])->name('unArchive.association')->middleware(['admin']);

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
    // Route::put('/associations/{association}', [AssociationController::class, 'updateAssociation'])->name('association.update');

    Route::get('/Modifier_Association/{associationId}', [ProfileController::class, 'updateAssociationView'])->name('association.update');
    Route::patch('/Modifier_Association/{associationId}', [ProfileController::class, 'update'])->name('association.update');



    Route::get('/ShowProfileAdmin', [ProfileController::class, 'ShowProfileAdmin'])->name('profile.ShowProfileAdmin')->middleware(['admin']);

    Route::post('/AddPost', [ArticleBlogController::class, 'store'])->name('article.store');
    Route::delete('/MyfeedD/{article}', [ArticleBlogController::class, 'delete'])->name('deleteArticle');
    Route::post('/MyfeedD/search', [ArticleBlogController::class, 'blogView'])->name('article.search');

});

Route::get('/Myfeed', [ArticleBlogController::class, 'blogView'])->name('blog');
