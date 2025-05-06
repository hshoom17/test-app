<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/posts', [PostController::class,'index'])->name(name:'posts.index');
Route::get('/posts/create',[PostController::class,'create'])->name(name:'posts.create');
Route::post('/posts',[PostController::class,'store'])->name(name:'posts.store');
Route::get('/posts/{post}/edit', [PostController::class,'edit'])->name(name:'posts.edit');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::put('/posts/{post}/', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}/', [PostController::class, 'destroy'])->name('posts.destroy');








