<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/form-penelitian', function(Request $request) {
    if ($request->ajax()) {

        $form = view('template.user.form-penelitian')->render();

        return response()->json([
            'form' =>  $form
        ]);  
    }
})->name('penelitian');

Route::get('/form-pkm', function(Request $request) {
    if ($request->ajax()) {

        $form = view('template.user.form-pkm')->render();

        return response()->json([
            'form' =>  $form
        ]);   
    }
})->name('pkm');

Route::get('/form-isentif', function(Request $request) {
    if ($request->ajax()) {

        $form = view('template.user.form-insentif')->render();

        return response()->json([
            'form' =>  $form
        ]);  
    }
})->name('insentif');

Route::get('/form-haki', function(Request $request) {
    if ($request->ajax()) {

        $form = view('template.user.form-haki')->render();

        return response()->json([
            'form' =>  $form
        ]);  
    }
})->name('haki');