<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// main
Route::get('/', [PageController::class, 'viewLogin']);
Route::get('/home', [PageController::class, 'viewHome']);

// profile
Route::get('/ranking', [PageController::class, 'viewRanking']);
Route::get('/profile', [PageController::class, 'viewProfile']);
Route::get('authLogout', [UserController::class, 'authLogout'])->name('authLogout');

// login register
Route::get('/register', [PageController::class, 'viewRegister']);
Route::post('/register/auth', [UserController::class, 'authRegister'])->name('authRegister');
Route::get('/login', [PageController::class, 'viewLogin']);
Route::post('/login/auth', [UserController::class, 'authLogin'])->name('authLogin');

// events
Route::get('/events', [PageController::class, 'viewEvents']);
Route::get('/events/dashboard', [PageController::class, 'viewEventDashboard']);
Route::get('/events/detail', [PageController::class, 'viewEventDetail']);
Route::get('/events/forum', [PageController::class, 'viewChat']);

// recruitment
Route::get('/recruitment', [PageController::class, 'viewRecruitment']);
Route::get('/recruitment/detail', [PageController::class, 'viewRecruitmentDetail']);

// training
Route::get('/training', [PageController::class, 'viewTraining']);
Route::get('/training/detail', [PageController::class, 'viewTrainingDetail']);

// store
Route::get('/store', [PageController::class, 'viewStore']);

// ========================= Testing ============================ //
Route::get('/events', [EventController::class, 'showEvents']);
Route::get('/events/new-event', [PageController::class, 'viewNewEvents']);
Route::post('/events/new-event/create-event', [EventController::class, 'createEvent'])->name('createEvent');
