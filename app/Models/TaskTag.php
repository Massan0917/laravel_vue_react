<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TasksTags extends Model
{
    use HasFactory;

    protected $primaryKey = 'task_tag_id';
    protected $foreignKey = ['task_id', 'tag_id'];
}
