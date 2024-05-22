<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Resources\TaskResource;

class TodoController extends Controller
{
    function getTask(){
        return TaskResource::collection(Task::all());
    }
}
