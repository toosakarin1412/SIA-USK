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

Route::get('/biodata', function () {
    return view('biodata');
})->name('biodata');

Route::get('/security', function () {
    return view('security');
})->name('security');

Route::get('/dashboard-krs', function () {
    return view('dashboardKrs');
})->name('dashboard-krs');
