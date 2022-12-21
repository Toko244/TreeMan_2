 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;

Route::group(['prefix' => 'admin',], function () {
        //Profile ------------------------------------->
        Route::get('profile', [UsersController::class, 'editProfile'] )->name('asdasdsa');
        Route::post('profile', [UsersController::class, 'updateProfile'] );
        Route::post('update_profile', [UsersController::class, 'updateProfile'])->name('updateProfile');
});
