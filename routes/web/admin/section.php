<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SectionController;

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin']], function () {
    Route::get('sections', [SectionController::class, 'index']);
    Route::get('sections/create', [SectionController::class, 'create'] );
    Route::post('sections/create', [SectionController::class, 'store'] );
    Route::get('sections/edit/{id}', [SectionController::class, 'edit'] );
    Route::post('sections/edit/{id}', [SectionController::class, 'update'] );
    Route::get('sections/destroy/{id}', [SectionController::class, 'destroy'] );
    Route::post('sections/arrange', [SectionController::class, 'arrange'] );
});
