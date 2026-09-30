<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; // Wajib ditambahkan di Laravel 11

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/service', [PageController::class, 'service']);
Route::get('/schedule', [PageController::class, 'schedule']);
Route::get('/schedule_master', [PageController::class, 'schedule_master']);
Route::get('/schedule2', [PageController::class, 'schedule2']);
Route::get('/schedule_master2', [PageController::class, 'schedule_master2']);
