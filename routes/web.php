<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Perusahaan\Home as Perusahaan;
use App\Http\Controllers\Petugas\Home as Petugas;
use App\Http\Controllers\Superadmin\Home as Superadmin;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if(Gate::allows('login-perusahaan')) {
        return redirect()->route('perusahaan.dashboard');
    }
    elseif (Gate::allows('login-petugas')) {
        return redirect()->route('petugas.dashboard');
    }
    elseif (Gate::allows('login-superadmin')) {
        return redirect()->route('superadmin.dashboard');
    }
    else {
        return view('dashboard');
    }
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified', 'can:login-perusahaan'])->group(function() {
                    Route::get('/perusahaan/dashboard', [Perusahaan::class, 'index'])->name('perusahaan.dashboard');

                    Route::get('/perusahaan/pemeriksaan', [Perusahaan::class, 'pemeriksaan'])->name('perusahaan.pemeriksaan');
});

Route::middleware(['auth:sanctum', 'verified', 'can:login-petugas'])->group(function() {
                    Route::get('/petugas/dashboard', [Petugas::class, 'index'])->name('petugas.dashboard');
});

Route::middleware(['auth:sanctum', 'verified', 'can:login-superadmin'])->group(function() {
                    Route::get('/superadmin/dashboard', [Superadmin::class, 'index'])->name('superadmin.dashboard');
});

