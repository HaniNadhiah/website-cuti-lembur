<?php

use App\Http\Controllers\adminHRController;
use App\Http\Controllers\GeneralManagerController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LemburController;
use App\Http\Controllers\managerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::middleware(['auth', 'role:adminhr'])->get('/dashboard-adminhr', [adminHRController::class, 'index']);
// Route::middleware(['auth', 'role:karyawan'])->get('/dashboard-karyawan', [KaryawanController::class, 'index']);
// Route::middleware(['auth', 'role:manager'])->get('/dashboard-manager', [managerController::class, 'index']);
// Route::middleware(['auth', 'role:gm'])->get('/dashboard-gm', [GeneralManagerController::class, 'index']);


Route::get('/lembur-form', [LemburController::class, 'form'])->name('lembur.form');
Route::post('/lembur-store', [LemburController::class, 'store'])->name('lembur.store');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
