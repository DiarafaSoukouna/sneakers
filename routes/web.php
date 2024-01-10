<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Parametres\Users;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\contenir;
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
    return view('login');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/loginAuth', [LoginController::class, 'login'])->name('loginAUth');

Route::get('/reset-password',[LoginController::class, 'showLinkRequestForm'])->name('request');
Route::post('/reset-password', [LoginController::class, 'sendResetLinkEmail'])->name('email');
Route::get('/reset-password/{token}',[LoginController::class, 'showResetForm'] )->name('reset');
Route::post('/reset-password',[LoginController::class, 'reset'] )->name('password.update');

Route::middleware(['auth'])->group(function () {
    Route::post('/first_connect', [LoginController::class, 'first_connect'])->name('first_connect');
    Route::get('/Dashboard', [DashboardController::class, 'index'] )->name('dashboard');
    Route::post('/DashboardStore', [DashboardController::class, 'store'] )->name('dashboard_store');
    Route::get('Get_produit/{idProduit}', [DashboardController::class, 'GetProduit']);
    Route::get('/First_connect', function () {
        return view('first_connect');
    })->name('first_connect');
    Route::post('/first_connect', [LoginController::class, 'first_connect'])->name('first_connect.store');

    Route::prefix('Parametre')->group(function () {
        Route::resource('Utilisateurs', Users::class);
        Route::delete('/Utilisateurs/{id}',  [Users::class, 'destroy'])->name('utilisateurs.destroy');
        Route::get('/user_edit/{id}',  [Users::class, 'edit'])->name('user.edit');
        Route::PATCH('/user_update/{id}',  [Users::class, 'update'])->name('user.update');
        Route::PATCH('/user_reset/{id}',  [Users::class, 'reset'])->name('user.reset');
        Route::PATCH('/Update_password',  [Users::class, 'password'])->name('user.password');
        Route::get('/Profil',  [Users::class, 'profil'])->name('utilisateurs.profil');

        Route::resource('Etablissements', EtablissementsController::class);
        Route::delete('/Etablissements/{id}',  [EtablissementsController::class, 'destroy'])->name('etablissement.destroy');
        Route::get('/etablissement_edit/{id}',  [EtablissementsController::class, 'edit']);
        Route::PATCH('/etablissement_update/{id}',  [EtablissementsController::class, 'update']);
    
        Route::resource('Commandes', contenir::class);
        Route::get('Type_get/{id_f}', [contenir::class, 'GetType']);
        Route::get('Price_get/{id_f}', [contenir::class, 'GetPrice']);
        Route::delete('/contenir/{id}',  [contenir::class, 'destroy'])->name('contenir.destroy');
        Route::get('/produit_edit/{id}',  [contenir::class, 'edit'])->name('produit.edit');
        Route::post('produit_update',[contenir::class,'updatequantite'])->name('quantite.update');
        Route::PATCH('/produit_update/{id}',  [contenir::class, 'update'])->name('produit.update');
        


        Route::resource('CommandePayment', CommandeController::class);
        Route::PATCH('/commande_update/{id}',  [CommandeController::class, 'update']);
        Route::PATCH('/commande_reset/{id}',  [CommandeController::class, 'reset'])->name('commande.reset');
        Route::get('/commande_edit/{id}',  [CommandeController::class, 'edit']);
        Route::get('/rapports/generate-pdf/{Rapport}', [RapportsController::class, 'generatePDF'])->name('Rapports_pdf.generatePDF');

    });
});
