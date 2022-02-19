<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_auth extends Model
{
    use HasFactory;
    public $table = 'student_auth';
    protected $fillable = ['email', 'password'];
}
