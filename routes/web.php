<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function(){
    return view('dashboard.index');
});

Route::resource('/dashboard/programs', ProgramController::class)->middleware('superadmin');
Route::resource('/dashboard/anggotas', AnggotaController::class)->middleware('superadmin');
Route::resource('/dashboard/category', CategoryController::class)->middleware('superadmin');
Route::resource('/dashboard/laporans', LaporanController::class)->middleware('admin');
Route::resource('/dashboard/logbooks', LogbookController::class)->middleware('admin');

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/cetak', [ProgramController::class, 'cetakProgram']);
// Route::get('/cetak', 'ProgramController@cetakProgram')->name('cetak');