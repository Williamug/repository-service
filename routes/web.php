<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])->name('home');
Route::post('/post', [PostController::class, 'create']);
Route::get('/post/{di}', [PostController::class, 'read'])->name('edit.post');
Route::put('/post/{id}', [PostController::class, 'update'])->name('update.post');
Route::delete('/post/{id}', [PostController::class, 'delete'])->name('destroy.post');
