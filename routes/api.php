<?php

use App\Http\Controllers\TodoController;

Route::get('/api/get/{id}', [TodoController::class, 'getTask']);