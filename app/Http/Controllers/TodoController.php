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

    function registTask(Request $request){
        // return $request;
        // タスクを登録
        $task = new Task;
        $task->title = $request->title;
        $task->content = $request->content;
        $task->priority = $request->priority;
        $task->severity = $request->severity;
        $task->progress = $request->progress;
        $task->deadline = $request->deadline;
        $task->user_id = $request->user_id;        
        // エラーハンドリング
        if ($task->save()) {
            return new TaskResource($task);
        } else {
            return response()->json(['error' => 'Task not saved'], 500);
        }
    }

    function deleteTask(Request $request){
        // return $request;
        // タスクを削除;
        $task = Task::find($request->id);
        if ($task->delete()) {
            return response()->json(['success' => 'Task deleted'], 200);
        } else {
            return response()->json(['error' => 'Task not deleted'], 500);
        }
    }

    function editTask(Request $request){
        // return $request;
        // タスクを更新
        $task = Task::find($request->id);
        $task->title = $request->title;
        $task->content = $request->content;
        $task->priority = $request->priority;
        $task->severity = $request->severity;
        $task->progress = $request->progress;
        $task->deadline = $request->deadline;
        // エラーハンドリング
        if ($task->save()) {
            return response()->json(['success' => 'Task updated'], 200);
        } else {
            return response()->json(['error' => 'Task not updated'], 500);
        }
    }
}
