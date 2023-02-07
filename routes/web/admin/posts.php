<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin']], function () {
    //Post ------------------------------------->
    Route::get('section/{sec}/posts', [PostController::class, 'index'] )->name('post.list');
    Route::get('section/{sec}/posts/create', [PostController::class, 'create'] )->name('post.create');
    Route::post('section/{sec}/posts/create', [PostController::class, 'store'] )->name('post.store');
    Route::get('section/posts/{post}/edit', [PostController::class, 'edit'] )->name('post.edit');
    Route::post('section/posts/{post}/edit', [PostController::class, 'update'] )->name('post.update');
    Route::get('section/posts/{post}/delete', [PostController::class, 'destroy'] )->name('post.destroy');
    Route::delete('section/posts/{post}/file/{id}', [PostController::class, 'deletefiles'] )->name('post.deletefiles');
});
