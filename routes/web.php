<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/', [MainController::class, 'index'])->name('base');
    Route::get('/input', [MainController::class, 'input'])->name('input');
    
    Route::middleware('role:dosen')->group(function () {
        Route::get('/profil', [MainController::class, 'profil'])->name('profil');
    });

    // json
    Route::get('/form-penelitian', [MainController::class, 'input_penelitian'])->name('penelitian');
    Route::get('/form-pkm', [MainController::class, 'input_pkm'])->name('pkm');
    Route::get('/form-isentif', [MainController::class, 'input_insentif'])->name('insentif');
    Route::get('/form-haki', [MainController::class, 'input_haki'])->name('haki');
});

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

