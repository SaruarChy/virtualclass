<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher_class extends Model
{
    use HasFactory;
    public $table = 'teacher_class';
    protected $fillable = ['classCode', 'subCode', 'batch', 'department', 'teacherId'];
}
