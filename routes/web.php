<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// auth routes

Route::get("/login", [AuthController::class, "login"]);
Route::post("/loginSubmit", [AuthController::class,"loginSubmit"]);
Route::get("/logout", [AuthController::class, "logout"]);