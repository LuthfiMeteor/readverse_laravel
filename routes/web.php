<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GitHubController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\BookmarkController;
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
Route::get('login/facebook', [FacebookController::class, 'facebookRedirect'])->name('login.facebook');
Route::get('auth/facebook/callback', [FacebookController::class, 'loginWithFacebook'])->name('login.facebook.callback');
// TWITTER
Route::get('login/twitter', [TwitterController::class, 'redirectToTwitter'])->name('login.twitter');
Route::get('auth/twitter/callback', [TwitterController::class, 'handleTwitterCallback']);
// GITHUB
Route::get('auth/github', [GitHubController::class, 'gitRedirect']);
Route::get('auth/github/callback', [GitHubController::class, 'gitCallback']);


// BOOKMARK
route::get('bookmark', [BookmarkController::class, 'lihatbookmark']);
route::post('/tambah-bookmark', [BookmarkController::class, 'tambahbookmark']);
route::post('/hapus-bookmark', [BookmarkController::class, 'hapusbookmark']);


// SEARCH
route::get('search', [FrontController::class, 'search']);
route::get('searchbuku', [FrontController::class, 'searchbuku']);


// BUKU
route::get('manga/', [FrontController::class, 'manga']);
route::get('novel/', [FrontController::class, 'novel']);
route::get('manhwa/', [FrontController::class, 'manhwa']);
route::get('all/', [FrontController::class, 'all']);




Route::get('/', [HomeController::class, 'index'])->name('/');

// DETAIL BUKU
route::get('buku/{id}', [FrontController::class, 'detailbuku']);

route::post('views', [FrontController::class, 'views']);

// CHAPTER
route::get('buku/chapter/{chapter}', [ChapterController::class, 'chapterlook']);
// FRONTEND


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
    Route::delete('hapus-chapter/{id}', [ChapterController::class, 'destroy']);
});
