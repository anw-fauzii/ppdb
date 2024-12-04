<?php

use App\Http\Controllers\AdminPendaftaranController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataOrtuController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TahunAjaranController;
use Illuminate\Support\Facades\Artisan;
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
    Route::get('/data-pendaftaran-bayar/{id}', [AdminPendaftaranController::class, 'bayar'])->name('data-pendaftaran.bayar');
    Route::put('/data-pendaftaran-bayar/{id}', [AdminPendaftaranController::class, 'edit'])->name('data-pendaftaran.edit');
    Route::get('/data-detail/{id}', [AdminPendaftaranController::class,'detail'])->name('data-pendaftaran.detail');
    Route::get('/export-formulir/{id}', [FormulirController::class, 'exportFormulir'])->name('export-formulir');
    Route::get('/pdf-formulir/{id}', [PDFController::class, 'formulir'])->name('pdf-formulir');
    Route::get('/pdf-persyaratan/{id}', [PDFController::class, 'persyaratan'])->name('pdf-persyaratan');
});

Route::get('/optimize', function () {
    $exitCode = Artisan::call('optimize');
    return '<h1>Clear Config cleared</h1>';
});



require __DIR__.'/auth.php';
