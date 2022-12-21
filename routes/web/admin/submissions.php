<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SubmissionController;

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin']], function () {
    //Banners -------------------------------------->        // Admin\UploadFilesController
    Route::get('submissions', [SubmissionController::class, 'index'] );
    Route::get('submission/{submission}', [SubmissionController::class, 'show'] );
    Route::get('submission/destroy/{submission}', [SubmissionController::class, 'destroy'] );
});
