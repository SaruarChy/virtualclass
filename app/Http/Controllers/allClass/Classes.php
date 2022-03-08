<?php

namespace App\Http\Controllers\allClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher_class;
use App\Models\Teachers;
use Dotenv\Validator as DotenvValidator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;
// use Validator;
use Illuminate\Support\Facades\Validator;
// use App\Http\Requests\StorePostRequest;

class Classes extends Controller
{
    //
    public function teacherClass()
    {
        // return view('allClass/teacherClass');
        $classes = Teacher_class::where('teacherId', '1')->get();
        $teacher = Teachers::find(1);
        return view('allClass.teacherClass', compact('classes', 'teacher'));
        // return $classes;
    }

    public function studentClass()
    {
        $classDetails = \App\Models\student_class::with('classes', 'class_teacher')->where('sid', '=', '1')->get();
        return view('allClass.studentClass', compact('classDetails'));
        // $detail['classes'][0]->subCode
    }
    public function createClass(Request $req)
    {

        // $req->validate([

        //     'classCode' => 'required|unique:teacher_class,classCode',
        //     'batch' => 'required'

        // ]);

        $validator = Validator::make($req->all(), [
            'classCode' => 'required|unique:teacher_class,classCode',
            'subCode' => 'required',
            'batch' => 'required',
            'department' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 0,  'error' => $validator->errors()->toArray()]);
        } else {
            // $values = [
            //     'classCode' => $req->classCode,
            //     'subCode' => $req->subCode,
            //     'batch' => $req->batch,
            //     'department' => $req->department
            // ];
            // $save = DB::table('teacher_class')->insert($values);

            $teacherClass = new Teacher_class();
            $teacherClass->classCode = json_encode($req->classCode);
            $teacherClass->subCode = json_encode($req->subCode);
            $teacherClass->batch = json_encode($req->batch);
            $teacherClass->department = json_encode($req->department);
            $save = $teacherClass->save();
            if ($save) {
                return response()->json(['status' => 1, 'msg' => 'New Class has been created']);
            }
        }
    }
}
