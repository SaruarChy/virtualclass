<?php

namespace App\Http\Controllers\classroom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stream;

class Class_stream extends Controller
{
    //
    public function stream($classCode)
    {
        // return $detail = Stream::where('classCode', $classCode)->get();
        return view('stream.stream');
    }
}
