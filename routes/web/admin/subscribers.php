<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;

Route::group(['prefix' => 'admin', 'middleware' => ['isSuperuser']], function () {
        //Profile ------------------------------------->
        Route::get('subscribers/export', [UsersController::class, 'exportSubscribers'] );
        Route::get('subscribers', [UsersController::class, 'subscribers']);
        Route::get('subscribers/delete/{id}', [UsersController::class, 'deletesubsctiber']);
});
