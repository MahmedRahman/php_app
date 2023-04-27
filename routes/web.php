<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('users', UserController::class);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/users',  [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

Route::get('/users/create', [App\Http\Controllers\UserController::class,'create'])->name('users.create');

Route::post('/users/store', [App\Http\Controllers\UserController::class,'store'])->name('users.store');

Route::get('/users/edit/{id}', [App\Http\Controllers\UserController::class,'edit'])->name('users.edit');

Route::delete('/users/destroy/{id}', [App\Http\Controllers\UserController::class,'destroy'])->name('users.destroy');
