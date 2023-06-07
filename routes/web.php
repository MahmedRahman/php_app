<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('fornt/index');
})->name('homeindex');

Route::get('/contact', function () {
    return view('fornt/contact');
})->name('contact');

Route::get('/about', function () {
    return view('fornt/about');
})->name('about');

Route::get('/features', function () {
    return view('fornt/features');
})->name('features');



Route::resource('users', UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/users',  [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

Route::get('/users/create', [App\Http\Controllers\UserController::class,'create'])->name('users.create');

Route::post('/users/store', [App\Http\Controllers\UserController::class,'store'])->name('users.store');

Route::get('/users/edit/{id}', [App\Http\Controllers\UserController::class,'edit'])->name('users.edit');

Route::delete('/users/destroy/{id}', [App\Http\Controllers\UserController::class,'destroy'])->name('users.destroy');
