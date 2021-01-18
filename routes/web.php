<?php

use App\Http\Controllers\Auth\LoginContoller;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/dashboard',[DashboardController::class, 'index'])
->name('dashboard');

Route::post('/logout',[LogoutController::class,'store'])->name('logout');

Route::get('/login',[LoginContoller::class,'index'])->name('login');
Route::post('/login',[LoginContoller::class, 'store']);

Route::get('/register',[RegisterController::class, 'store'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/post',[PostController::class,'index'])->name('posts');
Route::post('/post',[PostController::class,'store']);