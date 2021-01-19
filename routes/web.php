<?php

use App\Http\Controllers\Auth\LoginContoller;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/dashboard',[DashboardController::class, 'index'])
->name('dashboard');

Route::post('/logout',[LogoutController::class,'store'])->name('logout');

Route::get('/user/{user:username}/posts',[UserPostController::class,'index'])->name('user.posts');

Route::get('/login',[LoginContoller::class,'index'])->name('login');
Route::post('/login',[LoginContoller::class, 'store']);

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/posts',[PostController::class,'index'])->name('posts');
Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');
Route::post('/posts',[PostController::class,'store']);
Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');

Route::post('/post/{post}/likes',[PostLikeController::class,'store'])->name('posts.likes');
Route::delete('/post/{post}/likes',[PostLikeController::class,'destroy'])->name('posts.likes');