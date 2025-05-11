<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeSearchController;

Route::get('/anime/search', [AnimeSearchController::class, 'search'])->name('anime.search');

Route::get('/', function () {
    return view('welcome');
});
