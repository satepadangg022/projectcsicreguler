<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PedomanController;
use App\Http\Controllers\RfcController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\UploadController;

// ========================================
// ROUTE ORIGINAL (JANGAN DIUBAH)
// ========================================

Route::get('/', [WebController::class, 'index'])->name('index');

// ========================================
// ROUTE TESTING EAGER VS LAZY
// ========================================

// HALAMAN UTAMA - VISUAL HEAVY
Route::get('/test-eager', [WebController::class, 'indexEager'])->name('test.eager');
Route::get('/test-lazy', [WebController::class, 'indexLazy'])->name('test.lazy');

// DASHBOARD - DATA HEAVY
Route::get('/dashboard-eager', [WebController::class, 'dashboardEager'])->name('dashboard.eager');
Route::get('/dashboard-lazy', [WebController::class, 'dashboardLazy'])->name('dashboard.lazy');

// KEGIATAN PAL-CSIRT
Route::get('/kegiatan-eager', [WebController::class, 'kegiatanEager'])->name('kegiatan.eager');
Route::get('/kegiatan-lazy', [WebController::class, 'kegiatanLazy'])->name('kegiatan.lazy');

// ========================================
// ROUTE ORIGINAL LAINNYA (JANGAN DIUBAH)
// ========================================

Route::get('/tentang-kami', [WebController::class, 'tentangkami'])->name('tentangkami');
Route::get('/profile', [WebController::class, 'profile'])->name('profile');
Route::get('/jenis-layanan', [WebController::class, 'jenislayanan'])->name('jenislayanan');
Route::get('/kontak', [WebController::class, 'contact'])->name('contact');
Route::get('/berita1', [WebController::class, 'news1'])->name('news1');
Route::get('/berita2', [WebController::class, 'news2'])->name('news2');
Route::get('/berita3', [WebController::class, 'news3'])->name('news3');
Route::get('/visi-misi', [WebController::class, 'visimisi'])->name('visimisi');
Route::get('/kegiatanpalcsirt', [WebController::class, 'kegiatanpalcsirt'])->name('kegiatanpalcsirt');
Route::get('/panduan-teknis', [WebController::class, 'panduanteknis'])->name('panduanteknis');
Route::get('/RFC-2350', [WebController::class, 'rfc'])->name('rfc');
Route::get('/panduan-teknis/{id}', [WebController::class, 'panduanteknisshow'])->name('pedoman.show');
Route::get('/berita/{id}', [WebController::class, 'detailberita'])->name('detail.berita');
Route::get('/dashboard', [WebController::class, 'dashboard'])->name('dashboard');

Route::post('/admin123/upload', [UploadController::class, 'upload']);
Route::get('/admin123/upload', [WebController::class, 'login'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login'])->name('login.proses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// CRUD Routes (jangan diubah)
Route::get('/data-infografis', [InfografisController::class, 'index'])->name('index.infografis');
Route::get('/create-infografis', [InfografisController::class, 'create'])->name('create.infografis');
Route::post('/store-infografis', [InfografisController::class, 'store'])->name('store.infografis');
Route::get('/edit-infografis/{id}', [InfografisController::class, 'edit'])->name('edit.infografis');
Route::get('/show-infografis/{id}', [InfografisController::class, 'show'])->name('show.infografis');
Route::put('/update-infografis/{id}', [InfografisController::class, 'update'])->name('update.infografis');
Route::get('/delete-infografis/{id}', [InfografisController::class, 'destroy'])->name('delete.infografis');

Route::get('/data-kegiatan', [KegiatanController::class, 'index'])->name('index.kegiatan');
Route::get('/create-kegiatan', [KegiatanController::class, 'create'])->name('create.kegiatan');
Route::post('/store-kegiatan', [KegiatanController::class, 'store'])->name('store.kegiatan');
Route::get('/edit-kegiatan/{id}', [KegiatanController::class, 'edit'])->name('edit.kegiatan');
Route::get('/show-kegiatan/{id}', [KegiatanController::class, 'show'])->name('show.kegiatan');
Route::put('/update-kegiatan/{id}', [KegiatanController::class, 'update'])->name('update.kegiatan');
Route::get('/delete-kegiatan/{id}', [KegiatanController::class, 'destroy'])->name('delete.kegiatan');

Route::get('/data-berita', [BeritaController::class, 'index'])->name('index.berita');
Route::get('/create-berita', [BeritaController::class, 'create'])->name('create.berita');
Route::post('/store-berita', [BeritaController::class, 'store'])->name('store.berita');
Route::get('/edit-berita/{id}', [BeritaController::class, 'edit'])->name('edit.berita');
Route::get('/show-berita/{id}', [BeritaController::class, 'show'])->name('show.berita');
Route::put('/update-berita/{id}', [BeritaController::class, 'update'])->name('update.berita');
Route::get('/delete-berita/{id}', [BeritaController::class, 'destroy'])->name('delete.berita');

Route::get('/data-rfc', [RfcController::class, 'index'])->name('index.rfc');
Route::get('/create-rfc', [RfcController::class, 'create'])->name('create.rfc');
Route::post('/store-rfc', [RfcController::class, 'store'])->name('store.rfc');
Route::get('/edit-rfc/{id}', [RfcController::class, 'edit'])->name('edit.rfc');
Route::get('/show-rfc/{id}', [RfcController::class, 'show'])->name('show.rfc');
Route::put('/update-rfc/{id}', [RfcController::class, 'update'])->name('update.rfc');
Route::get('/delete-rfc/{id}', [RfcController::class, 'destroy'])->name('delete.rfc');

Route::get('/data-pedoman', [PedomanController::class, 'index'])->name('index.pedoman');
Route::get('/create-pedoman', [PedomanController::class, 'create'])->name('create.pedoman');
Route::post('/store-pedoman', [PedomanController::class, 'store'])->name('store.pedoman');
Route::get('/edit-pedoman/{id}', [PedomanController::class, 'edit'])->name('edit.pedoman');
Route::get('/show-pedoman/{id}', [PedomanController::class, 'show'])->name('show.pedoman');
Route::put('/update-pedoman/{id}', [PedomanController::class, 'update'])->name('update.pedoman');
Route::get('/delete-pedoman/{id}', [PedomanController::class, 'destroy'])->name('delete.pedoman');