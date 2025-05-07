<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeQuoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anime-quote', [AnimeQuoteController::class, 'getRandomQuote']);