<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['title', 'content', 'priority', 'severity', 'progress'];
    protected $dates = ['deadline'];
}
