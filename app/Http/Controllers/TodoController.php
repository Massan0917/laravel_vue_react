<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Resources\TaskResource;

class TodoController extends Controller
{
    function getTask($id){
        // user_idが$idのタスクを取得
        $task = Task::where('user_id', $id)->get();
        if ($task) {
            return TaskResource::collection($task);
        } else {
            return response()->json(['error' => 'Task not found'], 404);
        }
    }
}
