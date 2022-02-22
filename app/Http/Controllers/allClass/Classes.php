<?php

namespace App\Http\Controllers\allClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Classes extends Controller
{
    //
    public function teacherClass()
    {
        return view('allClass/teacherClass');
    }
}
