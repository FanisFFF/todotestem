<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TasksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// ○ Создание задачи: POST /tasks (поля: title, description, status).
Route::apiResource('tasks',TasksController::class);
// ○ Просмотр списка задач: GET /tasks (возвращает все задачи).
// ○ Просмотр одной задачи: GET /tasks/{id}.
// ○ Обновление задачи: PUT /tasks/{id}.
// ○ Удаление задачи: DELETE /tasks/{id}.