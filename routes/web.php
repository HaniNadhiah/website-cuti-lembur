<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentsController;
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


Route::middleware('auth')->group(function () {
    Route::get('/departments', [DepartmentsController::class, 'index'])->name('departments.index');
    Route::get('/departments/create', [DepartmentsController::class, 'create'])->name('departments.create');
    Route::post('/departments', [DepartmentsController::class, 'store'])->name('departments.store');
    Route::get('/departments/{department}', [DepartmentsController::class, 'show'])->name('departments.show');
    Route::get('/departments/{department}/edit', [DepartmentsController::class, 'edit'])->name('departments.edit');
    Route::put('/departments/{department}', [DepartmentsController::class, 'update'])->name('departments.update');
    Route::delete('/departments/{department}', [DepartmentsController::class, 'destroy'])->name('departments.destroy');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name(name: 'home');

