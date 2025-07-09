<?php


use App\Http\Controllers\PengajuanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// cuti
Route::get('/cuti-form', [PengajuanController::class, 'formCuti'])->name('cuti.Form');
// lembur
Route::get('/lembur-form', [PengajuanController::class, 'formLembur'])->name('lembur.form');
Route::get('/lembur-actual-form', [PengajuanController::class, 'formActual'])->name('lembur.formActual');
Route::post('/lembur-store', [PengajuanController::class, 'store'])->name('lembur.store');
Route::post('/lembur-actual', [PengajuanController::class, 'Actual'])->name('lembur.storeActual');
Route::post('/lembur-saya', [PengajuanController::class, 'LemburSaya'])->name('lemburSaya');
// Route::get('/lembur-saya', [PengajuanController::class, 'Actual'])->name('lembur.storeActual');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name(name: 'home');
