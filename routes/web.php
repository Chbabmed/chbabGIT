<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\VidangeController;

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

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/Layout', function () {
    return view('Layout');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/affectations', [App\Http\Controllers\AffectationsController::class, 'index'])->name('affectations');

Route::get('/Dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('Dashboard');

Route::get('/GestionDesVehicule',[App\Http\Controllers\GestionDesVehiculeController::class, 'index'])->name('GestionDesVehicule');

Route::get('/List_Vehicule', [App\Http\Controllers\List_VehiculeController::class, 'index'])->name('List_Vehicule');

Route::get('/missions', [App\Http\Controllers\MissionsController::class, 'index'])->name('missions');

Route::get('/More_info', [App\Http\Controllers\More_InfoController::class, 'index'])->name('More_info');

Route::get('/reparations', [App\Http\Controllers\ReparationsController::class, 'index'])->name('reparations');

Route::get('/users_management', [App\Http\Controllers\Users_ManagementController::class, 'index'])->name('users_management');

Route::get('/vidange', [App\Http\Controllers\VidangeController::class, 'index'])->name('vidange');
Route::post('/vidange', [App\Http\Controllers\VidangeController::class, 'store'])->name('vidange');
