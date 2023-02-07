<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerController;

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin']], function () {
    //Banners -------------------------------------->
    Route::get('banners/{type}', [BannerController::class, 'index'] )->name('banner.list');
    Route::get('banners/{type}/create', [BannerController::class, 'create'] )->name('banner.create');
    Route::post('banners/{type}/create', [BannerController::class, 'store'] )->name('banner.store');
    Route::get('banners/{banner}/edit', [BannerController::class, 'edit'] )->name('banner.edit');
    Route::post('banners/{banner}/edit', [BannerController::class, 'update'] )->name('banner.update');
    Route::get('banners/{banner}/delete', [BannerController::class, 'destroy'] )->name('banner.destroy');
});
