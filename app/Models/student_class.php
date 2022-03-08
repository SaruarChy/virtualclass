<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_class extends Model
{
    use HasFactory;
    public $table = 'student_class';

    public function classes()
    {
        return $this->hasMany(Teacher_class::class, 'classCode', 'classCode');
    }
    public function class_teacher()
    {
        return $this->hasMany(Teachers::class, 'teacherId', 'id');
    }
}
