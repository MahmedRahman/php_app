<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\MemberController;
use App\Http\Controllers\VersionsController;
use App\Http\Controllers\AppFeaturesController;



Route::post('/login', [UserController::class, 'login']);
Route::post('/user', [UserController::class, 'store']);


Route::post('/versions', [VersionsController::class, 'store']);
Route::get('/versions/last', [VersionsController::class, 'getLastVersion']);

Route::get('/app-features', [AppFeaturesController::class, 'index']);
Route::post('/app-features', [AppFeaturesController::class, 'store']);
Route::delete('/app-features/{id}', [AppFeaturesController::class, 'destroy']);
