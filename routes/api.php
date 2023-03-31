<?php

use App\Http\Controllers\MovieController as MovieControllerAlias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('movies', [MovieControllerAlias::class, 'index']);


Route::put('movies/{movie}/favorite', [MovieControllerAlias::class, 'favorite']);
//Route::put('movies/{movie}/unfavorite', [MovieControllerAlias::class, 'removeFavorite']);

