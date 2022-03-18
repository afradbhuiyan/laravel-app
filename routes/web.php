<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class , 'home']);

Route::get('/contact', [PageController::class , 'contact']);
Route::get('/about', [PageController::class , 'about']);
