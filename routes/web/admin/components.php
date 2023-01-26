<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComponentsController;

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin']], function () {
    Route::get('section/{id}/components', [ComponentsController::class, 'index'])->name('components.list');
    Route::get('section/{id}/component/create', [ComponentsController::class, 'create'] );
});
