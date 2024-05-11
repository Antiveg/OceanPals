<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'viewHome']);
Route::get('/home', [PageController::class, 'viewHome']);

Route::get('/register', [PageController::class, 'viewRegister']);
Route::post('/register/auth', [UserController::class, 'authRegister'])->name('authRegister');

Route::get('/login', [PageController::class, 'viewLogin']);
Route::post('/login/auth', [UserController::class, 'authLogin'])->name('authLogin');

Route::get('authLogout', [UserController::class, 'authLogout'])->name('authLogout');

Route::get('/events', [PageController::class, 'viewEvents']);
Route::get('/recruitment', [PageController::class, 'viewRecruitment']);
Route::get('/store', [PageController::class, 'viewStore']);
Route::get('/ranking', [PageController::class, 'viewRanking']);
Route::get('/profile', [PageController::class, 'viewProfile']);

// Testing
Route::get('/test', function () {
    $user = User::find(1); // Replace 1 with the user ID
    $ranking = $user->ranking;
    
    if ($ranking) {
        echo $ranking->Position; // Access the 'Position' attribute from the Rankings model instance
    } else {
        echo "No ranking found for the user.";
    }
});
