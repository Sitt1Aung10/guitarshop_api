<?php

use App\Http\Controllers\AllitemController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;


Route::get('/items', [AllitemController::class, 'index']);
Route::post('/orders', [OrderController::class, 'store']);
Route::get('/orders', [OrderController::class, 'index']);
