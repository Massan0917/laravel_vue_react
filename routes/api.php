<?php

use App\Http\Controllers\TodoController;

Route::get('/api/get/{id}', [TodoController::class, 'getTask']);
Route::post('/api/register', [TodoController::class, 'registTask']);