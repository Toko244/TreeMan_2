 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin']], function () {
        //Profile ------------------------------------->
        Route::get('profile', [UsersController::class, 'editProfile'] );
        Route::post('profile', [UsersController::class, 'updateProfile'] );
        Route::post('update_profile', [UsersController::class, 'updateProfile'])->name('updateProfile');
});
