<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComponentsController;
use App\Http\Controllers\Admin\ComponentPostsController;
use App\Http\Controllers\Admin\PostController;

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin']], function () {
    Route::get('section/{id}/components', [ComponentsController::class, 'index'])->name('components.list');
    Route::get('section/{id}/component/create', [ComponentsController::class, 'create'] );
    // Route::get('sections/edit/{id}', [ComponentsController::class, 'edit'] );


    Route::get('component/{sec}/posts/', [ComponentPostsController::class, 'index'] )->name('componentposts.list');
    Route::get('component/{sec}/posts/create', [ComponentPostsController::class, 'create'] );


    Route::get('component/posts/{post}/edit', [PostController::class, 'edit'] )->name('componentpost.edit');
});
