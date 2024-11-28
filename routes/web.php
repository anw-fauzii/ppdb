<?php

use App\Http\Controllers\AdminPendaftaranController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataOrtuController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TahunAjaranController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/formulir', FormulirController::class);
    Route::resource('/data-ortu', DataOrtuController::class);
    Route::resource('/dokumen', DokumenController::class);
    Route::resource('/daftar', DaftarController::class);
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('/tahun-ajaran', TahunAjaranController::class);
    Route::resource('/kategori', KategoriController::class);
    Route::get('/data-pendaftaran', [AdminPendaftaranController::class,'index'])->name('data-pendaftaran.index');
    Route::get('/data-pendaftaran/{id}', [AdminPendaftaranController::class,'show'])->name('data-pendaftaran.show');
    Route::get('/data-detail', [AdminPendaftaranController::class,'detail'])->name('data-pendaftaran.detail');
});



require __DIR__.'/auth.php';
