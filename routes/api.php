<?php

use App\Http\Controllers\TodoController;

Route::get('/api/get/{id}', [TodoController::class, 'getTask']);
Route::post('/api/register', [TodoController::class, 'registTask']);
Route::delete('/api/delete', [TodoController::class, 'deleteTask']);
Route::put('/api/edit', [TodoController::class, 'editTask']);