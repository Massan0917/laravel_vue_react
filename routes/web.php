<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/vue',function(){
    return Inertia::render('Todo');
});

require __DIR__.'/auth.php';
require __DIR__.'/api.php';