<?php

namespace App\Http\Controllers\classroom;

use App\Models\Class_stream;
use App\Http\Controllers\Controller;

// use App\Models\Class_stream as ModelsClass_stream;
use Illuminate\Http\Request;

class Stream extends Controller
{
    public function stream($classCode)
    {
        return $detail = Class_stream::where('classCode', $classCode)->get();
    }
}
