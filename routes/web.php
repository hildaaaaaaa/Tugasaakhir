<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function(){
    return view('dashboard.index');
});

Route::resource('/dashboard/programs', ProgramController::class);

Route::resource('/dashboard/anggotas', AnggotaController::class)->middleware('superadmin');

Route::resource('/dashboard/laporans', LaporanController::class)->middleware('superadmin');

Route::resource('/dashboard/evaluasis', EvaluasiController::class);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/cetak', [ProgramController::class, 'cetakProgram']);
// Route::get('/cetak', 'ProgramController@cetakProgram')->name('cetak');