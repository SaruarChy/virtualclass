<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher_auth extends Model
{
    use HasFactory;
    public $table = 'teacher_auth';
    protected $fillable = ['email', 'password'];
}
