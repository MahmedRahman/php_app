<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\MemberController;

Route::middleware(['auth:api'])->group(function () {
    Route::apiResource('users', UserController::class);
});


// Route::apiResource('/user', UserController::class);

Route::apiResource('members', MemberController::class);


