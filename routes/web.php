<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    GalleryController,
    ExhibitionController,
    ArtistController,
    AboutController,
    // PaintingController,
    ArtworkController,
    NewsController,
    ContactController
};
use App\Models\About;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

/* CONTACT */
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

/* GALLERY */
Route::prefix('gallery')->group(function () {

    Route::get('/', [GalleryController::class, 'index'])
        ->name('gallery.index');

    Route::get('/archive/{year}', [GalleryController::class, 'year'])
        ->name('gallery.archive.year');
});

/* EXHIBITION */
Route::prefix('exhibitions')->group(function () {
    Route::get('/', [ExhibitionController::class, 'index'])->name('exhibitions.index');
    Route::get('/{slug}', [ExhibitionController::class, 'show'])->name('exhibitions.show');
    // Route::get('/{exhibition:slug}', [ExhibitionController::class, 'show'])->name('exhibitions.show');
});

/* ARTIST */
Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
Route::get('/artists/{slug}', [ArtistController::class, 'show'])->name('artists.show');
// Route::get('/artists/{artist:slug}', [ArtistController::class, 'show'])->name('artists.show');

/* ARTWORK */
Route::prefix('artworks')->group(function () {
    Route::get('/', [ArtworkController::class, 'index'])->name('artworks.index');
    Route::get('/{slug}', [ArtworkController::class, 'show'])->name('artworks.show');
    // Route::get('/{artwork:slug}', [ArtworkController::class, 'show'])->name('artworks.show');
});

// /* PAINTING */
// Route::get('/paintings', [PaintingController::class, 'index'])->name('paintings.index');
// Route::get('/paintings/{painting:slug}', [PaintingController::class, 'show'])->name('paintings.show');

/* NEWS */
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news:slug}', [NewsController::class, 'show'])->name('news.show');
