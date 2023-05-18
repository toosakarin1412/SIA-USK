<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\KRSController;
use App\Http\Controllers\Perwalian;

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

Route::get('/', [CustomAuthController::class, 'index'])->name('HalamanLogin');
Route::post('/login', [CustomAuthController::class, 'customLogin'])->name('Login');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [CustomAuthController::class, 'signOut'])->name('Logout');

    Route::middleware('CheckRole:mahasiswa')->group(function () {
        //After Login the routes are accept by the loginUsers...
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
        
        Route::get('/isi-krs', [KRSController::class, 'isiKRS'])->name('isi-krs');
        Route::post('/krs/add', [KRSController::class, 'addKRS'])->name('krs.add');
        
        Route::get('/pkrs', [KRSController::class, 'pkrs'])->name('pkrs');
        Route::post('/pkrs/delete/', [KRSController::class, 'deleteKRS'])->name('pkrs.delete');
        
        Route::get('/khs', [KRSController::class, 'khs'])->name('khs');
        
        Route::get('/mata-kuliah', [KRSController::class, 'matakuliah'])->name('mata-kuliah');
        
        Route::get('/transkrip', function () {
            return view('transkrip');
        })->name('transkrip');
        
        Route::get('/ijazah', function () {
            return view('ijazah');
        })->name('ijazah');
        
        Route::get('/histori-nilai', function () {
            return view('historinilai');
        })->name('histori-nilai');
    });

    Route::middleware('CheckRole:dosen')->group(function () {
        Route::get('/dosen', function () {
            return view('dashboardDosen');
        })->name('dashboardDosen');
        Route::get('/dosen/krsmhs', [Perwalian::class, 'getKRS'])->name('krs.mhs');
        Route::post('/krs/updateNilai', [KRSController::class, 'updateNilai'])->name('krs.update.nilai');
        
    });

    Route::middleware('CheckRole:admin')->group(function () {
        Route::get('/admin', function () {
            return view('dashboardAdmin');
        })->name('dashboardAdmin');

        Route::get('/admin/matakuliah', [MataKuliahController::class, 'adminMK'])->name('admin.mk');
        Route::post('/mk/add', [MataKuliahController::class, 'addMK'])->name('mk.add');
    });
});


