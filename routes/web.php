<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\PaketController as AdminPaketController;
use App\Http\Controllers\Admin\PemesananController as AdminPemesananController;
use App\Http\Controllers\Admin\CustomerController as AdminCustomerController;
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

Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('/kontak', [WebsiteController::class, 'kontak'])->name('website.kontak');
Route::get('/tentang', [WebsiteController::class, 'tentang'])->name('website.tentang');
Route::get('/galeri', [WebsiteController::class, 'galeri'])->name('website.galeri');

Route::get('/paket/', [PaketController::class, 'index'])->name('paket.index');
Route::get('/paket/list', [PaketController::class, 'list'])->name('paket.list');
Route::get('/paket/list/{slug}', [PaketController::class, 'list_show'])->name('paket.list.show');
Route::post('/paket/store', [PaketController::class, 'store'])->name('paket.store');

Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index');
Route::get('/pemesanan/paket/{id}', [PemesananController::class, 'paket'])->name('pemesanan.paket');
Route::get('/pemesanan/item/destroy/{id}', [PemesananController::class, 'item_destroy'])->name('pemesanan.item.destroy');
Route::post('/pemesanan/proses/{uuid}', [PemesananController::class, 'proses'])->name('pemesanan.proses');
Route::get('/pemesanan/invoice/{uuid}', [PemesananController::class, 'invoice'])->name('pemesanan.invoice');
Route::post('/pemesanan/invoice/{uuid}/upload', [PemesananController::class, 'invoice_upload'])->name('pemesanan.invoice.upload');
Route::get('/pemesanan/payment/{uuid}', [PemesananController::class, 'payment'])->name('pemesanan.payment');
Route::get('/riwayat', [PemesananController::class, 'riwayat'])->name('pemesanan.riwayat');



Route::get('thank-you-page', function(){
    return 'Terima Kasih';
});
Route::get('cancel-page', function(){
    return 'Pembayaran DIbatalkan';
});
Route::get('callback-url', function(){
    return 'Pembayaran Selesai';
});



Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function() {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.index');

    // PEMESANAN
    Route::get('/pemesanan', [AdminPemesananController::class, 'index'])->name('admin.pemesanan.index');
    Route::post('/pemesanan/update/{id}', [AdminPemesananController::class, 'update'])->name('admin.pemesanan.update');

    Route::get('/customer', [AdminCustomerController::class, 'index'])->name('admin.customer.index');
    Route::get('/customer/{id}', [AdminCustomerController::class, 'show'])->name('admin.customer.show');

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
