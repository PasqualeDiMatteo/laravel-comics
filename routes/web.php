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

Route::get('/comics', function () {
    return view('comics');
})->name("comics");

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/caracters', function () {
    return view('caracters');
})->name("caracters");

Route::get('/movies', function () {
    return view('movies');
})->name("movies");

Route::get('/tv', function () {
    return view('tv');
})->name("tv");


Route::get('/games', function () {
    return view('games');
})->name("games");

Route::get('/collectibles', function () {
    return view('collectibles');
})->name("collectibles");
