<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get('/', [PageController::class , 'home']);

Route::get('/contact', [PageController::class , 'contact']);
Route::get('/about', [PageController::class , 'about']);


Route::resource('/posts', PostController::class);
