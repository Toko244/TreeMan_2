<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\PagesController;

Route::post('/submission', [PagesController::class, 'submission'])->name('submission');
Route::post('/search', [PagesController::class, 'search'])->name('search');
Route::any('/', [PagesController::class, 'homePage']);

// Routes for Davita
Route::get('/home-page', function(){
    return view('website.home');
});
