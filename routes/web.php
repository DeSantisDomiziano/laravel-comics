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
    
      $data = [
        "keys" => [
            "comics" => config('db_comics.comics'),
            "pages" => config('db_comics.pages'),
        ]
      ];

      /* foreach($data["pages"] as $page) {
        var_dump($page);
      };

       dd($data);  */

    return view('comics', $data);
})->name('comics');

Route::get('/characters', function () {
    
    $data = [
        "keys" => [
            "comics" => config('db_comics.comics'),
            "pages" => config('db_comics.pages'),
        ]
    ];    

    return view('characters', $data);
})->name('characters');

Route::get('/movies', function () {
    
    $data = [
        "keys" => [
            "comics" => config('db_comics.comics'),
            "pages" => config('db_comics.pages'),
        ]
    ];    

    return view('movies', $data);
})->name('movies');

Route::get('/tv', function () {
    
    $data = [
        "keys" => [
            "comics" => config('db_comics.comics'),
            "pages" => config('db_comics.pages'),
        ]
    ];    

    return view('tv', $data);
})->name('tv');

Route::get('/games', function () {
    
    $data = [
        "keys" => [
            "comics" => config('db_comics.comics'),
            "pages" => config('db_comics.pages'),
        ]
    ];    

    return view('games', $data);
})->name('games');

Route::get('/collectibles', function () {
    
    $data = [
        "keys" => [
            "comics" => config('db_comics.comics'),
            "pages" => config('db_comics.pages'),
        ]
    ];    

    return view('collectibles', $data);
})->name('collectibles');

Route::get('/videos', function () {
    
    $data = [
        "keys" => [
            "comics" => config('db_comics.comics'),
            "pages" => config('db_comics.pages'),
        ]
    ];    

    return view('videos', $data);
})->name('videos');

Route::get('/fans', function () {
    
    $data = [
        "keys" => [
            "comics" => config('db_comics.comics'),
            "pages" => config('db_comics.pages'),
        ]
    ];    

    return view('fans', $data);
})->name('fans');

Route::get('/news', function () {
    
    $data = [
        "keys" => [
            "comics" => config('db_comics.comics'),
            "pages" => config('db_comics.pages'),
        ]
    ];    

    return view('news', $data);
})->name('news');

Route::get('/shop', function () {
    
    $data = [
        "keys" => [
            "comics" => config('db_comics.comics'),
            "pages" => config('db_comics.pages'),
        ]
    ];    

    return view('shop', $data);
})->name('shop');
