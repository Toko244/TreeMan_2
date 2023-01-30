<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\PagesController;
use App\Http\Controllers\Website\HomePageController;
use App\Http\Controllers\Website\SearchController;

Route::post('/submission', [PagesController::class, 'submission'])->name('submission');
Route::post('/search', [SearchController::class, 'index'])->name('search');
Route::any('/', [HomePageController::class, 'homePage']);

Route::get('/front', function(){
    return view('website.front');
});

Route::get('/photo', function(){
    return view('website.photo');
});

Route::get('/contact', function(){
    return view('website.contact');
});

// Routes for Davita
Route::get('/home-page', function(){
    return view('website.home');
});
