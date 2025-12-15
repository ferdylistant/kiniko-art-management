<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    GalleryController,
    ExhibitionController,
    ArtistController,
    PaintingController,
    NewsController,
    ContactController
};

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', fn() => view('about'))->name('about');

/* CONTACT */
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

/* GALLERY */
Route::prefix('gallery')->group(function () {
    Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/{gallery:slug}', [GalleryController::class, 'show'])->name('gallery.show');
});

/* EXHIBITION */
Route::prefix('exhibitions')->group(function () {
    Route::get('/', [ExhibitionController::class, 'index'])->name('exhibitions.index');
    Route::get('/{exhibition:slug}', [ExhibitionController::class, 'show'])->name('exhibitions.show');
});

/* ARTIST */
Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
Route::get('/artists/{artist:slug}', [ArtistController::class, 'show'])->name('artists.show');

/* PAINTING */
Route::get('/paintings', [PaintingController::class, 'index'])->name('paintings.index');
Route::get('/paintings/{painting:slug}', [PaintingController::class, 'show'])->name('paintings.show');

/* NEWS */
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news:slug}', [NewsController::class, 'show'])->name('news.show');
