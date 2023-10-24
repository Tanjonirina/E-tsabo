<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Patient\PatientController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Transfert\TranferController;
use App\Http\Controllers\Personnel\PersonnelController;
use App\Http\Controllers\Departement\DepartementController;


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



Route::get('/', [AuthController::class ,'index'])->name('Login');
Route::get('/Admin',[AdminController::class, 'index'])->name('Admin');

Route::prefix('/Personnel')->group(function(){
    Route::get('/liste',[PersonnelController::class ,'index'])->name('Personnels.liste');
    Route::get('/Ajout',[PersonnelController::class ,'Ajou'])->name('Personnels.Ajout');
    Route::get('/Modif/{personnel}',[PersonnelController::class ,'update'])->name('Personnels.modif');
    Route::post('/Ajou', [PersonnelController::class, 'store'])->name('Personnels.Ajou');
    Route::put('/update/{personnel}', [PersonnelController::class, 'modifie'])->name('Personnels.update');
    Route::get('/{personnel}', [PersonnelController::class, 'destroy'])->name('Personnels.delet');
    Route::get('/recherche', [PersonnelController::class, 'recherche'])->name('Personnels.recherche');

});
Route::prefix('/Patient')->group(function(){
    Route::get('/liste',[PatientController::class ,'index'])->name('Patient.liste');
    Route::get('/Ajout',[PatientController::class ,'Ajou'])->name('Patient.Ajou');

});
Route::prefix('/departement')->group(function(){
    Route::get('/liste',[DepartementController::class ,'index'])->name('departement.liste');
    Route::get('/Ajout',[DepartementController::class ,'Ajou'])->name('departement.Ajou');
    Route::get('/show/{departement}',[DepartementController::class ,'show'])->name('departement.show');
    Route::put('/update/{departement}',[DepartementController::class ,'update'])->name('departement.update');
    Route::post("/store", [DepartementController::class, 'store'])->name('departement.store');
    Route::delete('/{departement}',[DepartementController::class ,'destroy'])->name('departement.delete');

});
Route::prefix('/service')->group(function(){
    Route::get('/liste',[ServiceController::class ,'index'])->name('Service.liste');
    Route::get('/Ajout',[ServiceController::class ,'Ajou'])->name('service.Ajou');

});

Route::prefix('/Tranfert')->group(function(){
    Route::get('/liste',[TranferController::class ,'index'])->name('tranfert.liste');
    Route::get('/plus',[TranferController::class ,'plus'])->name('tranfert.plus');

});


