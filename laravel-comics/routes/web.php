<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'comicsController@comicsFunction');

Route::get('/elem/{index}', 'comicsController@singleComicFunction')
        -> name('singleComic');
