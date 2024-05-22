<?php

use App\Http\Controllers\TodoController;

Route::get('/get/{id}', [TodoController::class, 'getTask']);