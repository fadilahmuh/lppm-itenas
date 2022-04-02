<?php

use App\Http\Controllers\HkiController;
use App\Http\Controllers\InsentifController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PkmController;
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

Route::middleware('auth:pegawai,dosen')->group(function() {
    Route::get('/', [MainController::class, 'index'])->name('base');
    Route::get('/input', [MainController::class, 'input'])->name('input');
    // Route::get('/input2', [MainController::class, 'input2']);
    Route::get('/profil', [MainController::class, 'profil'])->name('profil');
    Route::get('/test', [MainController::class, 'test']);


    

    Route::resource('penelitian', PenelitianController::class);
    Route::resource('pkm', PkmController::class);
    Route::resource('insentif', InsentifController::class);
    Route::resource('hki', HkiController::class);
    // Route::get('/form-penelitian', [MainController::class, 'input_penelitian'])->name('penelitian');
    // Route::get('/form-pkm', [MainController::class, 'input_pkm'])->name('pkm');
    // Route::get('/form-isentif', [MainController::class, 'input_insentif'])->name('insentif');
    // Route::get('/form-hki', [MainController::class, 'input_haki'])->name('haki');
    
    // json
    Route::get('/data-dosen', [MainController::class, 'get_dosen'])->name('get_dosen');
    Route::get('/data-mhs', [MainController::class, 'get_mhs'])->name('get_mhs');
    Route::get('/data-hibah', [MainController::class, 'get_hibah'])->name('get_hibah');
    Route::get('/data-insentif', [MainController::class, 'get_insentif'])->name('get_insentif');
    Route::get('/data-publikasi', [MainController::class, 'get_pub'])->name('get_pub');
});

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

