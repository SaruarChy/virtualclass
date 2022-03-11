<?php

namespace App\Http\Controllers\classroom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Stream extends Controller
{
    public function stream(){
        return view('stream.teacherStream');
    }
}
