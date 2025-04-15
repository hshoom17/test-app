<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/create',[PostController::class,'create'])->name(name:'posts.create');
Route::get('/posts/{post}', [PostController::class,'show']);







