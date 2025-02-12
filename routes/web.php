<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get("/", [DashboardController::class, "index"])->name("dashboard");
Route::post("/idea", [IdeaController::class, "store"])->name("idea.create");
Route::delete('/idea/{id}', [IdeaController::class, "destroy"])->name("idea.destroy");

Route::get("/profile", [ProfileController::class, "update"]);
