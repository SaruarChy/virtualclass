<?php

namespace App\Http\Controllers\allClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher_class;
use Validator;
use App\Http\Requests\StorePostRequest;

class Classes extends Controller
{
    //
    public function teacherClass()
    {
        return view('allClass/teacherClass');
    }
    public function createClass(Request $req)
    {
        // $req->validate([
        //     'batch' => 'required|batch|unique:batch',
        // ]);
        $req->validate([
            'batch' => 'required|batch',
            'classCode' => 'required|unique:teacher_class,classCode',


        ]);
        // return Teacher_class::all();
    }
}
