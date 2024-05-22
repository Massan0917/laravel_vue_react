<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Resources\TaskResource;

class TodoController extends Controller
{
    function getTask($id){
        $task = Task::find($id);
        if ($task) {
            return new TaskResource($task);
        } else {
            return response()->json(['error' => 'Task not found'], 404);
        }
    }
}
