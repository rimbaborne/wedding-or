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
    Route::get('/pemesanan', [AdminPemesananController::class, 'index'])->name('admin.pemesanan.index');
    Route::resource('/paket', AdminPaketController::class);
});
