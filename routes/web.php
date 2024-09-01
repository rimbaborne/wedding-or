<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\WebsiteController;

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

Route::get('/', [DashboardsController::class, 'index']);
Route::get('/kontak', [WebsiteController::class, 'kontak']);
Route::get('/tentang', [WebsiteController::class, 'tentang']);
Route::get('/galeri', [WebsiteController::class, 'galeri']);
