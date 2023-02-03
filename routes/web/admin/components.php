<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComponentsController;
use App\Http\Controllers\Admin\ComponentPostsController;
use App\Http\Controllers\Admin\PostController;

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin']], function () {
    Route::get('components/{id}', [ComponentsController::class, 'index'])->name('components.list');
    Route::get('component/{id}/create', [ComponentsController::class, 'create'] );
    Route::get('component/{id}/edit', [ComponentsController::class, 'edit'] );
    Route::get('component/{id}/destroy', [ComponentsController::class, 'destroy'] );
    Route::post('component/arrange/{id}', [ComponentsController::class, 'arrange'] );


    // Route::get('component/{sec}/posts/', [ComponentPostsController::class, 'index'] )->name('componentposts.list');
    // Route::get('component/{sec}/posts/create', [ComponentPostsController::class, 'create'] );


    // Route::get('component/posts/{post}/edit', [PostController::class, 'edit'] )->name('componentpost.edit');
});
