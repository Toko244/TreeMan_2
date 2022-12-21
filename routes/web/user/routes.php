<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\PagesController;
use App\Http\Controllers\Website\HomePageController;
use App\Http\Controllers\Website\SearchController;

Route::post('/submission', [PagesController::class, 'submission'])->name('submission');
Route::post('/search', [SearchController::class, 'index'])->name('search');
Route::any('/', [HomePageController::class, 'homePage']);

// Routes for Davita
Route::get('/home-page', function(){
    return view('website.home');
});
