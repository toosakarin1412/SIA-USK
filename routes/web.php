<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/simkuliah', function () {
    return view('simkuliah');
})->name('simkuliah');

// routing untuk Setting
Route::get('/biodata', function () {
    return view('biodata');
})->name('biodata');

Route::get('/security', function () {
    return view('security');
})->name('security');

// Routing untuk menu KRS
Route::get('/dashboard-krs', function () {
    return view('dashboardKrs');
})->name('dashboard-krs');

Route::get('/isi-krs', function () {
    return view('isikrs');
})->name('isi-krs');

Route::get('/pkrs', function () {
    return view('pkrs');
})->name('pkrs');

Route::get('/khs', function () {
    return view('khs');
})->name('khs');

Route::get('/mata-kuliah', function () {
    return view('matakuliah');
})->name('mata-kuliah');

Route::get('/transkrip', function () {
    return view('transkrip');
})->name('transkrip');

Route::get('/ijazah', function () {
    return view('ijazah');
})->name('ijazah');

Route::get('/histori-nilai', function () {
    return view('historinilai');
})->name('histori-nilai');
