<?php

use App\Http\Controllers\Api\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

Route::get("/GetAllTasks", [TaskController::class, 'index']);
Route::post("/SaveTasks", [TaskController::class, 'store']);
Route::get("/GetTasks/{id}", [TaskController::class, 'show']);
Route::put("/UpdateTasks/{id}", [TaskController::class, 'update']);
Route::delete("/DeleteTasks/{id}", [TaskController::class, 'destroy']);
