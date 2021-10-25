<?php

use App\Http\Controllers\api\authController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [authController::class, 'login']);
// Route::middleware('auth:sanctum')->post('/user', [authController::class, 'login']);
