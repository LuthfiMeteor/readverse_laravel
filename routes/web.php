<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\frontend\FrontController;

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

Auth::routes();
// GOOGLE
route::get('auth/google', [GoogleController::class, 'RedirectToGoogle'])->name('Google');
route::get('auth/google/callback', [GoogleController::class, 'GoogleCallback'])->name('GoogleCallback');
// FACEBOOK
Route::get('login/facebook', [FacebookController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [FacebookController::class, 'handleFacebookCallback'])->name('login.facebook.callback');
// TWITTER
Route::get('login/twitter', [TwitterController::class, 'redirectToTwitter'])->name('login.twitter');
Route::get('login/twitter/callback', [TwitternController::class, 'handleTwitterCallback']);

Route::get('/', [HomeController::class, 'index'])->name('/');

// DETAIL BUKU
route::get('buku/{id}', [FrontController::class, 'detailbuku']);
// FRONTEND
route::get('bookmark', [FrontController::class, 'bookmark']);

Route::middleware(['auth'])->group(function () {
});



Route::middleware(['auth', 'jikaadmin'])->group(function () {
    route::get('/dashboard', [AdminController::class, 'index']);
    // KATEGORI
    route::get('/kategori', [KategoriController::class, 'index']);
    route::get('tambah-kategori', [KategoriController::class, 'tambah']);
    route::post('masukan-kategori', [kategoriController::class, 'insert']);
    Route::get('edit-kategori/{id}', [kategoriController::class, 'edit']);
    Route::put('edit-kategori/proses/{id}', [kategoriController::class, 'update']);
    Route::delete('hapus-kategori/{id}', [kategoriController::class, 'destroy']);
    // MANGA
    Route::get('buku', [BukuController::class, 'index']);
    route::get('tambah-buku', [BukuController::class, 'tambah']);
    route::post('masukan-buku', [BukuController::class, 'insert']);
    Route::get('edit-buku/{id}', [BukuController::class, 'edit']);
    Route::put('edit-buku/proses/{id}', [BukuController::class, 'update']);
    Route::delete('hapus-buku/{id}', [BukuController::class, 'destroy']);
    // CHAPTER
    route::get('chapter', [ChapterController::class, 'index']);
    route::get('tambah-chapter', [ChapterController::class, 'tambah']);
    route::post('masukan-chapter', [ChapterController::class, 'insert']);
});
