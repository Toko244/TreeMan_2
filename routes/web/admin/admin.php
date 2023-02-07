<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin']], function () {
    Route::get('/', [AdminController::class, 'index'] )->name('dashboard');
});
