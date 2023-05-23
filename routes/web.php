<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('db_comics');

    
    $pages = [
        "characters",
        "comics",
        "movies",
        "tv",
        "games",
        "collectibles",
        "videos",
        "fans",
        "news",
        "shop",
    ];
        

    //dd($comics);
    return view('comics', compact('comics', 'pages'));
})->name('comics');

Route::get('/characters', function () {
    $comics = config('db_comics');

    
    $pages = [
        "characters",
        "comics",
        "movies",
        "tv",
        "games",
        "collectibles",
        "videos",
        "fans",
        "news",
        "shop",
    ];
        

    //dd($comics);
    return view('characters', compact('comics', 'pages'));
})->name('characters');

Route::get('/movies', function () {
    $comics = config('db_comics');

    
    $pages = [
        "characters",
        "comics",
        "movies",
        "tv",
        "games",
        "collectibles",
        "videos",
        "fans",
        "news",
        "shop",
    ];
        

    //dd($comics);
    return view('movies', compact('comics', 'pages'));
})->name('movies');

Route::get('/tv', function () {
    $comics = config('db_comics');

    
    $pages = [
        "characters",
        "comics",
        "movies",
        "tv",
        "games",
        "collectibles",
        "videos",
        "fans",
        "news",
        "shop",
    ];
        

    //dd($comics);
    return view('tv', compact('comics', 'pages'));
})->name('tv');

Route::get('/games', function () {
    $comics = config('db_comics');

    
    $pages = [
        "characters",
        "comics",
        "movies",
        "tv",
        "games",
        "collectibles",
        "videos",
        "fans",
        "news",
        "shop",
    ];
        

    //dd($comics);
    return view('games', compact('comics', 'pages'));
})->name('games');

Route::get('/collectibles', function () {
    $comics = config('db_comics');

    
    $pages = [
        "characters",
        "comics",
        "movies",
        "tv",
        "games",
        "collectibles",
        "videos",
        "fans",
        "news",
        "shop",
    ];
        

    //dd($comics);
    return view('collectibles', compact('comics', 'pages'));
})->name('collectibles');

Route::get('/videos', function () {
    $comics = config('db_comics');

    
    $pages = [
        "characters",
        "comics",
        "movies",
        "tv",
        "games",
        "collectibles",
        "videos",
        "fans",
        "news",
        "shop",
    ];
        

    //dd($comics);
    return view('videos', compact('comics', 'pages'));
})->name('videos');

Route::get('/fans', function () {
    $comics = config('db_comics');

    
    $pages = [
        "characters",
        "comics",
        "movies",
        "tv",
        "games",
        "collectibles",
        "videos",
        "fans",
        "news",
        "shop",
    ];
        

    //dd($comics);
    return view('fans', compact('comics', 'pages'));
})->name('fans');

Route::get('/news', function () {
    $comics = config('db_comics');

    
    $pages = [
        "characters",
        "comics",
        "movies",
        "tv",
        "games",
        "collectibles",
        "videos",
        "fans",
        "news",
        "shop",
    ];
        

    //dd($comics);
    return view('news', compact('comics', 'pages'));
})->name('news');

Route::get('/shop', function () {
    $comics = config('db_comics');

    
    $pages = [
        "characters",
        "comics",
        "movies",
        "tv",
        "games",
        "collectibles",
        "videos",
        "fans",
        "news",
        "shop",
    ];
        

    //dd($comics);
    return view('shop', compact('comics', 'pages'));
})->name('shop');
