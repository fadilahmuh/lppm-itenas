<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\HkiController;
use App\Http\Controllers\InsentifController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PkmController;
use App\Http\Controllers\PublikasiController;
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
    // Route::get('/masterdata', [MasterDataController::class, 'index'])->name('masterdata');
    Route::prefix('masterdata')->group(function() {
        Route::get('/', [MasterDataController::class, 'index'])->name('masterdata');
        Route::get('/dosen/add', [MasterDataController::class, 'create_dosen'])->name('dosen.create');
        Route::post('/dosen/store', [MasterDataController::class, 'store_dosen'])->name('dosen.store');
        Route::get('/mhs/add', [MasterDataController::class, 'create_mhs'])->name('mhs.create');
        Route::post('/mhs/create', [MasterDataController::class, 'store_mhs'])->name('mhs.store');
    });
    Route::prefix('data')->group(function() {
        Route::resource('penelitian', PenelitianController::class)->only(['index']);
        Route::resource('insentif', InsentifController::class)->only(['index']);
        Route::resource('pkm', PkmController::class)->only(['index']);
        Route::resource('hki', HkiController::class)->only(['index']);
        Route::resource('publikasi', PublikasiController::class)->only(['index']);
    });
    Route::get('/history', [MainController::class, 'history'])->name('history');
    

    Route::resource('penelitian', PenelitianController::class)->except(['index']);
    Route::resource('insentif', InsentifController::class)->except(['index']);
    Route::resource('pkm', PkmController::class)->except(['index']);
    Route::resource('hki', HkiController::class)->except(['index']);
    Route::resource('publikasi', PublikasiController::class)->except(['index']);
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

Route::middleware('auth:pegawai')->group(function() {
    Route::get('/kotak-masuk', [MainController::class, 'inbox'])->name('inbox');
});

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

