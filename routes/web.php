<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployesController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AppController;
use App\Http\Controllers\DossierController;

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
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home' , [AppController::class , 'index']);
    Route::resource('employes', EmployesController::class);
    Route::get('employes/{id}/certificate', [EmployesController::class , 'getWorkCertificate'])
        ->name('work.certificate');
    Route::get('employes/{id}/vacation', [EmployesController::class , 'vacationRequest'])
        ->name('work.vacation');
    Route::resource('departements', DepartementController::class);
    Route::resource('users', UserController::class);
    Route::resource('configs', ConfigController::class);
    Route::resource('dossiers', DossierController::class);
});

Route::prefix('user')->middleware('auth')->group(function () {
    Route::get('/home' , [AppController::class , 'index']);
    Route::get('employes' , [HomeController::class , 'AfficherEmployes']);
    Route::get('departements' , [HomeController::class , 'AfficherDepartements']);
    Route::get('vacation' , [HomeController::class , 'AfficherVacationRequest']);
    Route::get('certificate' , [HomeController::class , 'AfficherCetificate']);
});






