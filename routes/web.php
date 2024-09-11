<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\PaketController as AdminPaketController;
use App\Http\Controllers\Admin\PemesananController as AdminPemesananController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\JenisPaketController as AdminJenisPaketController;

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

Route::get('/', [DashboardsController::class, 'index'])->name('dashboard.index');
Route::get('/kontak', [WebsiteController::class, 'kontak'])->name('website.kontak');
Route::get('/tentang', [WebsiteController::class, 'tentang'])->name('website.tentang');
Route::get('/galeri', [WebsiteController::class, 'galeri'])->name('website.galeri');

Route::get('/paket/', [PaketController::class, 'index'])->name('paket.index');
Route::get('/paket/list', [PaketController::class, 'list'])->name('paket.list');
Route::get('/paket/list/{slug}', [PaketController::class, 'list_show'])->name('paket.list.show');
Route::post('/paket/store', [PaketController::class, 'store'])->name('paket.store');

Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index');
Route::post('/pemesanan/store', [PemesananController::class, 'store'])->name('pemesanan.store');
Route::get('/pemesanan/invoice/{uuid}', [PemesananController::class, 'invoice'])->name('pemesanan.invoice');


Route::middleware('auth')->prefix('admin')->group(function() {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.index');

    // PEMESANAN
    Route::get('/pemesanan', [AdminPemesananController::class, 'index'])->name('admin.pemesanan.index');

    // PAKET
    Route::get('/paket/{jenis}', [AdminPaketController::class, 'index'])->name('admin.paket.index');
    Route::get('/paket/{jenis}/create', [AdminPaketController::class, 'create'])->name('admin.paket.create');
    Route::post('/paket/{jenis}/store', [AdminPaketController::class, 'store'])->name('admin.paket.store');
    Route::get('/paket/{jenis}/edit/{id}', [AdminPaketController::class, 'edit'])->name('admin.paket.edit');
    Route::post('/paket/{jenis}/update/{id}', [AdminPaketController::class, 'update'])->name('admin.paket.update');
    Route::get('/paket/{jenis}/destroy/{id}', [AdminPaketController::class, 'destroy'])->name('admin.paket.destroy');

    // JENIS PAKET
    Route::get('/jenis-paket', [AdminJenisPaketController::class, 'index'])->name('admin.jenis-paket.index');
    Route::get('/jenis-paket/create', [AdminJenisPaketController::class, 'create'])->name('admin.jenis-paket.create');
    Route::post('/jenis-paket/store', [AdminJenisPaketController::class, 'store'])->name('admin.jenis-paket.store');
    Route::get('/jenis-paket/edit/{id}', [AdminJenisPaketController::class, 'edit'])->name('admin.jenis-paket.edit');
    Route::post('/jenis-paket/update/{id}', [AdminJenisPaketController::class, 'update'])->name('admin.jenis-paket.update');
    Route::get('/jenis-paket/destroy/{id}', [AdminJenisPaketController::class, 'destroy'])->name('admin.jenis-paket.destroy');
});
