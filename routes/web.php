<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    $title = 'Dashboard';
    return view('index', compact('title'));
});

Route::get('/input', function () {
    $title = 'Input Data Baru';
    return view('inputUser', compact('title'));
});

Route::get('/profil', function () {
    $title = 'Profil';
    return view('profil', compact('title'));
});

