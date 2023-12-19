<?php

use App\Http\Controllers\ComicController;
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

// CRUD Comics

Route::get('/comics', [ComicController::class, 'index'])
    ->name('comics');

Route::get('/comics/create', [ComicController::class, 'create'])
    ->name('comics.create');

Route::get('/comics/{comic}', [ComicController::class, 'show'])
    ->name('comics.show');

Route::post('/comics', [ComicController::class, 'store'])
    ->name('comics.store');


// ROUTES

Route::get('/', function () {
    return view('comics.home');
})->name('home');

Route::get('/characters', function () {
    return view('comics.characters');
})->name('characters');

Route::get('/movies', function () {
    return view('comics.movies');
})->name('movies');

Route::get('/tv', function () {
    return view('comics.tv');
})->name('tv');

Route::get('/games', function () {
    return view('comics.games');
})->name('games');

Route::get('/collectibles', function () {
    return view('comics.collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('comics.videos');
})->name('videos');

Route::get('/fans', function () {
    return view('comics.fans');
})->name('fans');

Route::get('/news', function () {
    return view('comics.news');
})->name('news');

Route::get('/shop', function () {
    return view('comics.shop');
})->name('shop');
