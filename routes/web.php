<?php

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

// Home

Route::get('/', function () {
    return view('home');
})->name("home");

// Caracters

Route::get('/characters', function () {
    return view('characters');
})->name("characters");

// Comics

Route::get('/comics', function () {
    return view('comics');
})->name("comics");

// Comic 

Route::get('/comic/{index}', function ($index) {
    $comics = config("comics");
    $comic = $comics[$index];
    $last_index = count($comics) - 1;
    $prev = $index > 0 ? $index - 1 : $last_index;
    $next = $index == $last_index ? 0 : $index + 1;

    return view('comic', compact("comic", "next", "prev"));
})->name("comic");

// Movies

Route::get('/movies', function () {
    return view('movies');
})->name("movies");

// Tv

Route::get('/tv', function () {
    return view('tv');
})->name("tv");

// Games

Route::get('/games', function () {
    return view('games');
})->name("games");

// Collectibles

Route::get('/collectibles', function () {
    return view('collectibles');
})->name("collectibles");

// Videos

Route::get('/videos', function () {
    return view('videos');
})->name("videos");

// Fans

Route::get('/fans', function () {
    return view('fans');
})->name("fans");

// News

Route::get('/news', function () {
    return view('news');
})->name("news");

// Shop

Route::get('/shop', function () {
    return view('shop');
})->name("shop");
